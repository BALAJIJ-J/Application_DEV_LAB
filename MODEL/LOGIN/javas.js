function validate() {
    var rollno = document.getElementById("rollno").value;
    var name = document.getElementById("name").value;
    var marks = document.getElementById("marks").value;
    if (rollno.length == "" && name.length == "" && marks.length == "") {
        alert("Rollno, Name and Marks fields are empty");
        return false;
    }
    // else {
    //     {
    //         if (rollno.length == "") {
    //             alert("Rollno Field is empty");
    //             return false;
    //         }
    //         if (name.length == "") {
    //             alert("Name field is empty");
    //             return false;
    //         }
    //         if (marks.length == "") {
    //             alert("Marks Field is Empty");
    //             return false;
    //         }
    //     }
    // }
}
function myFunction() {
    alert("Inserted Successfully");
}
function myFunction1() {
    alert("Deleted Successfully");
}
function myFunction2() {
    alert("Updated Successfully");
}
function myFunction3() {
    alert("View Button Clicked");
}
function myFunction4() {
    alert("View All Button Clicked");
}