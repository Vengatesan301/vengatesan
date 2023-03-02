function validate(){
    var user=document.getElementById("user");
    if(user.value==""){
        
        user.style.border="solid 4px red";
        document.getElementById("lbuser").style.visibility="visible";
        return false;
    }
    var ln=document.getElementById("ln");
    if(ln.value==""){
        
        ln.style.border="solid 4px red";
        document.getElementById("lbln").style.visibility="visible";
        return false;
    }
    var em=document.getElementById("em").value;
    var a=em.indexOf("@");
    var b=em.lastIndexOf(".");
    if(a<1||b<a+1||b+2>=em.length || em==""){
        
        
        em.style.border="solid 4px red";
        document.getElementById("lbem").style.visibility="visible";
        return false;
    }
    var nu=document.getElementById("nu");
    if(nu.value==""){
        
        nu.style.border="solid 4px red";
        document.getElementById("lbnu").style.visibility="visible";
        return false;
    }
    
    
    
    
    
   
}