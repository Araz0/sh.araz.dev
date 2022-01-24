const submitBtn=document.getElementById("createUrlBtn");
submitBtn.onclick=function(e)
{
    e.preventDefault();
    CreateNewUrl();
}

function CreateNewUrl(){
    let sufixField = document.getElementById("sufixField").value;
    let ogUrlField = document.getElementById("ogUrlField").value;
    
    
    fetch("process.php?sufixField=" + sufixField + "&ogUrlField=" + ogUrlField)
    .then(function(response) {
        let content = response.text();
        return content;
    })
    .then(function(content) {
        let data = JSON.parse(content);
        console.log(data);
        return data;
    });   
}
