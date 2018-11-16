
var a = "1";
var b = 0; 
var num = "No_of_pizzas";
function add(idclick) {
    switch(idclick)
    {
        case "Pepperoni" : sessionStorage.setItem(a,"Pepperoni");
                            break;
        case "mag" : sessionStorage.setItem(a,"Margherita");
                    break;
        case "4Cheese" : sessionStorage.setItem(a,"4 Cheese");
                    break;
        case "tuna" : sessionStorage.setItem(a,"Tuna");
                    break;
    }
    a = parseInt(a);
    a+=1;
    b+=1;
    sessionStorage.setItem(num,b);
    a.toString(a);

}

