var Person = {
    Name: "",
    Date: "",
    Points: "",
    Size: ""
};


var applogic = {

    clearuielements: function () {
        var inputs = document.getElementsByClassName("c1");
        for (var  i = 0; i < inputs.length; i++) {
            inputs[i].value = "";
        }
    },

    saveitem: function () {
        var lscount = localStorage.length;
        var inputs = document.getElementsByClassName("c1");
        Person.Name = inputs[0].value;
        Person.Date = inputs[1].value;
        Person.Points = inputs[2].value;
        Person.Size = inputs[3].value;
        localStorage.setItem("Person_" + lscount, JSON.stringify(Person));
        location.reload();
    },

    loaddata: function () {
        var datacount = localStorage.length;
        var dvcontainer = document.getElementById('dvcontainer');
        if (datacount > 0) {
            var render = "<table width='445px' class='table table-bordered bg-white'>";
            render += "<tr><th>Имя</th><th>Дата</th><th>Очки</th><th>Размер</th></tr>";
            for (var i = 0; i < datacount; i++) {
                var key = localStorage.key(i);
                if(key.includes("Person_")) {
                    var person = localStorage.getItem(key);
                    var data = JSON.parse(person);

                    render += "<tr><td>" + data.Name + " </td>";
                    render += "<td>" + data.Date + "</td>";
                    render += "<td>" + data.Points + "</td>";
                    render += "<td>" + data.Size + "</td>";
                }
            }
            render += "</table>";
            dvcontainer.innerHTML = render;
        }
    },

    clearstorage: function () {
        var storagecount = localStorage.length;
        if (storagecount > 0) {
            for (var i = 0; i < storagecount; i++) {
                localStorage.clear();
            }
        }
        window.location.reload();
    }
};

var btnsave = document.getElementById('btnsave');
btnsave.addEventListener('click', applogic.saveitem, false);

var btnclear = document.getElementById('btnclear');
btnclear.addEventListener('click', applogic.clearuielements, false);

var btnclearstorage = document.getElementById('btnclearstorage');
btnclearstorage.addEventListener('click', applogic.clearstorage, false);



window.onload = function() {
    var myCards = document.getElementById('game-block');
    var resultsArray = [];
    var counter = 00;
    var text = document.getElementById('text');
    var seconds = 00;
    var tens = 00;
    var tries = 00;
    var appendTens = document.getElementById("tens");
    var appendSeconds = document.getElementById("seconds");
    var buttonPause = document.getElementById('button-pause');

    var Interval;
    var images = [
        '1', '2', '3', '38', '7', '42', '45', '10', '46', '12', '47', '67', '52', '55', '63', '18', '19', '31'
    ];

    var clone = images.slice(0); // duplicate array
    var cards = images.concat(clone); // merge to arrays

// Shufffel function
    function shuffle(o) {
        for (var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x) ;
        return o;
    }

    shuffle(cards);

    for (var i = 0; i < cards.length; i++) {
        card = document.createElement('div');
        card.dataset.item = cards[i];
        card.dataset.view = "card";
        myCards.appendChild(card);

        card.onclick = function () {
            if (this.className != 'flipped' && this.className != 'correct') {
                this.className = 'flipped';
                var result = this.dataset.item;
                resultsArray.push(result);
                clearInterval(Interval);
                Interval = setInterval(startTimer, 10);
            }


            if (resultsArray.length > 1) {
                if (resultsArray[0] === resultsArray[1]) {
                    check("correct");
                    counter++;
                    win();
                    resultsArray = [];
                } else {
                    check("reverse");
                    resultsArray = [];
                }

            }

        }

    }


    window.onload = function () {
        span = document.getElementById('triesid');
        var tries = 00;
        span.innerHTML = tries;
        document.body.onclick = function (e) {
            e = e || event;
            var target = e.target || e.srcElement;
            if (target.className != 'flipped') return;
            tries++;
            span.innerHTML = Math.floor(tries / 2);
        }
    };


    var check = function (className) {
        var x = document.getElementsByClassName("flipped");

        setTimeout(function () {

            for (var i = (x.length - 1); i >= 0; i--) {
                x[i].className = className;
            }

        }, 500);

    };


    var win = function () {

        if (counter === 18) {
            clearInterval(Interval);
            text.innerHTML = "Счет: " + (5000 - (seconds + tries));
        }

    };

    function change_color(obj) {
        obj.value && (document.body.style.backgroundColor = obj.value);
    }

    buttonPause.onclick = function () {
        clearInterval(Interval);
    };


    function startTimer() {
        tens++;

        if (tens < 9) {
            appendTens.innerHTML = "0" + tens;
        }

        if (tens > 9) {
            appendTens.innerHTML = tens;

        }

        if (tens > 99) {
            seconds++;
            appendSeconds.innerHTML = "0" + seconds;
            tens = 0;
            appendTens.innerHTML = "0" + 0;
        }

        if (seconds > 9) {
            appendSeconds.innerHTML = seconds;
        }

    }


    applogic.loaddata();
};
