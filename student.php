<?php

include('./config.php');

class Student{
    public $DBconn;
    // jo hmny connection bnaya h wo db connection mein a gya h
    function __construct($conn){
        $this->DBconn=$conn;
    }

    // fetch data
    function getData(){
        $sqlQuery = "select * from students";
        $getStudents = $this->DBconn->prepare($sqlQuery);
        $getStudents->execute();
        $result = $getStudents->fetchAll();  
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th> Std id </th>";
                echo "<th> Student name </th>";
                echo "<th> Student email </th>";
                echo "<th> Student class </th>";
                echo "<th> Student contact </th>";
            echo "</tr>";
            foreach($result as $row){
                echo "<tr>";
                    echo "<td>" . $row['std_id']; "</td>";
                    echo "<td>" . $row['std_name']; "</td>";
                    echo "<td>" . $row['std_email']; "</td>";
                    echo "<td>" . $row['std_class']; "</td>";
                    echo "<td>" . $row['std_contact']; "</td>";
                echo "</tr>";
            }    
        echo "</table>";
    }

    // insert data
    // function insertData(){
    //     $sqlInsert = "insert into students (std_id, std_name, std_email, std_class, std_contact) values (null, 'Humza', 'humza@gmail.com', '25', 031234567890)";
    //     $insertData = $this->DBconn->prepare($sqlInsert);
    //     $result = $insertData->execute();
    //     if ($result) {
    //         echo "Data insert";
    //     }
    //     else {
    //         echo "Not Inserted";
    //     }
        
    // }

    // update data
    function updateData(){
        $sqlUpdate = "update students set 
                        std_name = 'Faique',
                        std_email = 'faique@gmail.com', 
                        std_class = 'Graphics',
                        std_contact = 032445324 where std_id = 3";

        $updateData = $this->DBconn->prepare($sqlUpdate);
        $result = $updateData->execute();
        if ($result) {
            echo "Data updated";
        }
        else {
            echo "Not updated";
        }
        
    }

    // Delete data
    function deleteData(){
        $sqlDelete = "delete from students where std_id = 5";
        $deleteData = $this->DBconn->prepare($sqlDelete);
        $result = $deleteData->execute();
        if ($result) {
            echo 'Data deleted';
        }
        else{
            echo 'Not Deleted';
        }
    }
}
// $std = new Student($conn);
// $stdData = new Student();
// $std->getData();



?>