
var a = "1";
var b = 0; 
var num = "No_of_pizzas";
function add(idclick) {
    switch(idclick)
    {
        case "Cheese" : sessionStorage.setItem(a,"Cheese");
                            alert("Added!");
                            break;
        case "Gtom" : sessionStorage.setItem(a,"Garlic Tomato");
                    alert("Added!");
                    break;
        case "Pep" : sessionStorage.setItem(a,"Pepperoni");
                    alert("Added!");
                    break;
                    
        case "BBQ" : sessionStorage.setItem(a,"BBQ Chicken");
                    alert("Added!");
                    break;
        case "Olympus" : sessionStorage.setItem(a,"Mt. Olympus");
                    alert("Added!");
                    break;
        case "Nebo" : sessionStorage.setItem(a,"Mt. Nebo");
                    alert("Added!");
                    break;
        case "Everest" : sessionStorage.setItem(a,"Mt. Everest");
                    alert("Added!");
                    break;
        case "Fuji" : sessionStorage.setItem(a,"Mt. Fuji");
                    alert("Added!");
                    break;
    }
    a = parseInt(a);
    a+=1;
    b+=1;
    sessionStorage.setItem(num,b);
    a.toString(a);

}
function store(id,value) {
    sessionStorage.setItem(id,value);
}
