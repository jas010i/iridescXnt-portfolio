



// Opens header menu

function expandMenu() {


            document.getElementById('expand').style.right = "0";

            document.getElementById('expand-toggle').style.display = "none";

            document.getElementById('expand-detoggle').style.display = "inline-block";


}




// Closes header menu

function retractMenu() {

    document.getElementById('expand').style.right = "100%";

    document.getElementById('expand-detoggle').style.display = "none";

    document.getElementById('expand-toggle').style.display = "inline-block";




}