var table = document.createElement('table');
var b = sessionStorage.getItem("No_of_pizzas");
table.style.width = "40%";
table.style.padding = "10px";
var total = 0;
function price(i) {
    // alert(sessionStorage.getItem(i));
    switch(sessionStorage.getItem(i))
    {
        case "Cheese" : return "12";
        case "Garlic Tomato" : return "15";
        case "Pepperoni" : return "17";
        case "BBQ Chicken" : return "20";
        case "Mt. Olympus" : return "20";
        case "Mt. Nebo" : return "20";
        case "Mt. Everest" : return "22";
        case "Mt. Fuji" : return "25";
    }
}
var trhead = document.createElement('tr');   

var tda = document.createElement('td');
var tdb = document.createElement('td');

var texta = document.createTextNode("Item");
var textb = document.createTextNode("Price");
tda.appendChild(texta);
    tdb.appendChild(textb);
    trhead.appendChild(tda);
    trhead.appendChild(tdb);

    table.appendChild(trhead);

for (var i = 1; i <= b; i++){
    var tr = document.createElement('tr');   

    var td1 = document.createElement('td');
    var td2 = document.createElement('td');

    var text1 = document.createTextNode(sessionStorage.getItem(i));
    var text2 = document.createTextNode("$"+price(i));
    total+= parseFloat(price(i));
    td1.appendChild(text1);
    td2.appendChild(text2);
    tr.appendChild(td1);
    tr.appendChild(td2);

    table.appendChild(tr);
}
document.body.appendChild(table);
var tot = document.createElement('p');
tot.textContent = "Total: $"+total.toFixed(2);
document.body.appendChild(tot);