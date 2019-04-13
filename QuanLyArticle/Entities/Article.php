<?php
@include_once './config.php';
class Article{

    var $ID;
    var $Title;
    var $Description;
    var $Content;
    var $DateCreated;
    var $DateModifier;
    var $Author;
    var $ID_Category;

    function __construct(
        $id,
        $title,
        $description,
        $content,
        $dateCreated,
        $dateModifier,
        $author,
        $id_Category
    ) {
        $this->ID = $id;
        $this->Title = $title;
        $this->Description = $description;
        $this->Content = $content;
        $this->DateCreated = $dateCreated;
        $this->DateModifier = $dateModifier;
        $this->Author = $author;
        $this->ID_Category = $id_Category;
    }

        /**
         * Lấy toàn bộ danh sách sinh viên trong CSDL
         * @return Array of Student
         */

        static function getList(){
            $ls = array();
            $conn= connectDB();
            mysqli_set_charset($conn,"utf8");
            $sql=" SELECT * FROM article";
            $rs=$conn->query($sql);
            if($rs->num_rows){
                while ($row=$rs->fetch_assoc())
                {
                    $ls[]= new Article(
                        $row["ID"],
                        $row["Title"],
                        $row["Description"],
                        $row["Content"],
                        $row["DateCreated"], 
                        $row["DateModifier"],
                        $row["Author"],
                        $row["ID_Category"]
                    );
                }
                return $ls;            
            }
        }
        static function getListByKeyWord($key){
            $ls = array();
            $conn= connectDB();
            mysqli_set_charset($conn,"utf8");
            $sql=" SELECT * FROM article WHERE Title LIKE '%$key%' OR Description LIKE '%$key%' OR Author LIKE '%$key%' ";
            $rs=$conn->query($sql);
            if($rs->num_rows){
                while ($row=$rs->fetch_assoc())
                {
                    $ls[]= new Article(
                        $row["ID"],
                        $row["Title"],
                        $row["Description"],
                        $row["Content"],
                        $row["DateCreated"], 
                        $row["DateModifier"],
                        $row["Author"],
                        $row["ID_Category"]
                    );
                }
                return $ls;            
            }
        }
        static function getListByCategory($key){
            $ls = array();
            $ls2 = Article::getList();
            if($key == 5){
                return $ls2;
            }
            $conn= connectDB();
            mysqli_set_charset($conn,"utf8");
            $sql=" SELECT * FROM article WHERE ID_Category = $key ";
            $rs=$conn->query($sql);
            if($rs->num_rows){
                while ($row=$rs->fetch_assoc())
                {
                    $ls[]= new Article(
                        $row["ID"],
                        $row["Title"],
                        $row["Description"],
                        $row["Content"],
                        $row["DateCreated"], 
                        $row["DateModifier"],
                        $row["Author"],
                        $row["ID_Category"]
                    );
                }
                return $ls;            
            }
        }
        static function them($id, $title, $description, $content, $dateCreated, $dateModifier, $author, $id_Category){
            $conn= ConnectDB();
            $sql="INSERT INTO article (ID, Title, Description, Content, DateCreated, DateModifier, Author, ID_Category)
            VALUES ($id, N'$title', N'$description', N'$content', N'$dateCreated', N'$dateModifier', N'$author', $id_Category ) ";
            return $conn->query($sql);
        }
        static function xoa($id){
            $conn= ConnectDB();
            mysqli_set_charset($conn,"utf8");
            $sql = "DELETE FROM article WHERE ID = $id ";
            return $conn->query($sql);
            $conn->close();
        }

        static function sua($id, $title, $description, $content, $dateCreated, $dateModifier, $author, $id_Category){
            $conn= ConnectDB();
            mysqli_set_charset($conn,"utf8");
            $sql=" UPDATE article SET 
            Title = N'$title',
            Description = N'$description',
            Content = N'$content',
            DateCreated = N'$dateCreated',
            DateModifier = N'$dateModifier',
            Author = N'$author',
            ID_Category = $id_Category
            WHERE ID = $id
            ";
            return $conn->query($sql);
        }

    }

    ?>

