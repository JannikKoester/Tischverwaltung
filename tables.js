/*tisch1 = {
    "name":"",
    "tag":30 
};
tisch2 = {
    "name":"Ernst",
    "tag":30 
};
tisch3 = {
    "name":"Daniel",
    "tag":30 
};
tisch4 = {
    "name":"",
    "tag":30 
};
tisch5 = {
    "name":"Siggi",
    "tag":30 
};
tisch6 = {
    "name":"Holga",
    "tag":30 
};

/*

<script>
$(function(){
//alert(Object.values(tisch1));
$('#table1 p').text(tisch1.name);
$('#table2 p').text(tisch2.name);
$('#table3 p').text(tisch3.name);
$('#table4 p').text(tisch4.name);
$('#table5 p').text(tisch5.name);
$('#table6 p').text(tisch6.name);

checkForFreeTables();
});

function checkForFreeTables()
{

    if(tisch1.name ==="")
    {
        document.getElementById("buttonTable1").style.background='green';
        $('#table1 p').text("Dieser Platz ist noch frei!");
    }
    else
    {
        document.getElementById("buttonTable1").style.background='red';
        $('#table1 p').text("Besetzt von " + tisch1.name);
    }

    if(tisch2.name ==="")
    {
        document.getElementById("buttonTable2").style.background='green';
        $('#table2 p').text("Dieser Platz ist noch frei!");
    }
    else
    {
        document.getElementById("buttonTable2").style.background='red';
        $('#table2 p').text("Besetzt von " + tisch2.name);
    }

    if(tisch3.name ==="")
    {
        document.getElementById("buttonTable3").style.background='green';
        $('#table3 p').text("Dieser Platz ist noch frei!");
    }
    else
    {
        document.getElementById("buttonTable3").style.background='red';
        $('#table3 p').text("Besetzt von " + tisch3.name);
    }

    if(tisch4.name ==="")
    {
        document.getElementById("buttonTable4").style.background='green';
        $('#table4 p').text("Dieser Platz ist noch frei!");
    }
    else
    {
        document.getElementById("buttonTable4").style.background='red';
        $('#table4 p').text("Besetzt von " + tisch4.name);
    }
    
    if(tisch5.name ==="")
    {
        document.getElementById("buttonTable5").style.background='green';
        $('#table5 p').text("Dieser Platz ist noch frei!");
    }
    else
    {
        document.getElementById("buttonTable5").style.background='red';
        $('#table5 p').text("Besetzt von " + tisch5.name);
    }
    if(tisch6.name ==="")
    {
        document.getElementById("buttonTable6").style.background='green';
        $('#table6 p').text("Besetzt von " + tisch6.name);
    }
    else
    {
        document.getElementById("buttonTable6").style.background='red';
        $('#table6 p').text("Dieser Platz ist besetzt!");
    }
}
</script>


