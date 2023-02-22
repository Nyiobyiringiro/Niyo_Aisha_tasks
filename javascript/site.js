//a simple function that triggers a pop box
function hello(){
    alert ("Welcome to my websit");
}
function add(){
    document.write(5+6);
}
function changeColor(){
   
    let color= document.getElementById("background").value;
    document.body.style.backgroundColor=color;

}
function fColor(){
   
    let color= document.getElementById("font").value;
    document.body.style.color=color;

}
//Form validation.
function crud(){
    let fname=(document.form1.fname.value).trim();
    let lname=(document.form1.lname.value).trim();
    if(fname.length<5){
       alert("Name is too small");
       return false;
    }
    if(lname.length>15){
        alert("Last name should be 15 characters");
        return false;
     }
    
}
function fname(){
    let fname=(document.form1.fname.value).trim();
     if(fname.length<5){
       alert("Name is too small");
       return false;
    }
    
    
}