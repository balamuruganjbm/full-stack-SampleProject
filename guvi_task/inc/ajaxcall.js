var XHR = new XMLHttpRequest();
XHR.onreadystatechange = ()=>{
    if(XHR.readyState == 4 && XHR.status == 200){
        var response = JSON.parse(XHR.responseText);
                document.getElementById("firstname").textContent=response[response.length-1].firstname;
                document.getElementById("lastname").textContent=response[response.length-1].lastname;
                document.getElementById("email").textContent=response[response.length-1].email;
                document.getElementById("companyname").textContent=response[response.length-1].companyname;
                document.getElementById("designation").textContent=response[response.length-1].designation;
                document.getElementById("salary").textContent=response[response.length-1].salary;
                document.getElementById("phno").textContent=response[response.length-1].phno;
    }
}
XHR.open("GET","/guvi_task/userdetails.json");
XHR.send();
