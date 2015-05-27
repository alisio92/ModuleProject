/**
 * Created by alisio on 27/05/2015.
 */
document.addEventListener("DOMContentLoaded", init);

function init(){
    var newEvent = document.getElementById("new_event");
    if(newEvent!= null) newEvent.addEventListener("click", newEventClick);

    var newProject = document.getElementById("new_project");
    if(newProject!= null) newProject.addEventListener("click", newProjectClick);


    var detailEvent = document.getElementById("detail_event");
    if(detailEvent!= null) detailEvent.addEventListener("click", detailEventClick);


    var detailProject = document.getElementById("detail_project");
    if(detailProject!= null) detailProject.addEventListener("click", detailProjectClick);
}

function newEventClick(){
    window.location.href = "./newevent.php";
}

function newProjectClick(){
    window.location.href = "./newproject.php";
}

function detailProjectClick(){
    window.location.href = "./projectdetail.php";
}