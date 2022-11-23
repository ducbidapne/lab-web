<!doctype html>
<html>
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP with PHP</title>
    <link href="style.css" rel="stylesheet">
    <script>
        function ajax(){
            const obj = document.getElementById("info");
            obj.style.display = "block";
            const value=document.getElementById("chon").value;
            const xml = new XMLHttpRequest();

            xml.onreadystatechange=()=>{
                if(xml.readyState==4){
                    obj.innerHTML=xml.responseText;
                }
            }
            const url = "showTable.php?chon="+value;
            xml.open("GET", url, false);
            xml.send();
        }
    </script>
</head>
<body>
<h1>OOP with PHP</h1>
<select id="chon" onChange="ajax();">
    <option value="">-->-Chọn-<--</option>
    <option value="giaovien">Giáo viên</option>
    <option value="sinhvien">Sinh viên</option>
    <option value="hocphan">Học phần</option>
    <select>
        <hr>
        <div id="info" style="display:none;"></div>
</body>
</html>