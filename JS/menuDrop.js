



// Opens header menu

function expandMenu() {


            document.getElementById('expand').style.right = "0%";

            document.getElementById('expand-toggle').style.display = "none";

            document.getElementById('expand-detoggle').style.display = "inline-block";
            


}

// Closes header menu

function retractMenu() {

    document.getElementById('expand').style.right = "100%";

    document.getElementById('expand-detoggle').style.display = "none";

    document.getElementById('expand-toggle').style.display = "inline-block";

}



// on click shows information (static v dynamic)

function arrDown() {

    document.getElementById('static-dynamic-info').style.maxHeight = "100%";

    document.getElementById('static-dynamic-info').style.overflow = "clip";

    document.getElementById('arr-down').style.display = "none";

    document.getElementById('arr-up').style.display = "block";

}


// on click hides information (static v dynamic)

function arrUp() {

    document.getElementById('static-dynamic-info').style.maxHeight = "0%";

    document.getElementById('static-dynamic-info').style.overflow = "hidden";

    document.getElementById('arr-down').style.display = "block";

    document.getElementById('arr-up').style.display = "none";

}
