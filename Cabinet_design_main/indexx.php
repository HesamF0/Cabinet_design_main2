<?php
include("headerr.html");
$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"SELECT * FROM `mdf`");
mysqli_close($link);
?>
<div class="row">
<div class="container px-4 px-lg-5">
<div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center"></br>
                    </br>
                    </br>
                        <h2 >لیست محصولات MDF</h2>
                        <hr class="divider" />
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">ویرایش</th>
      <th scope="col">حذف کردن</th>
      <th scope="col">اسم </th>
      <th scope="col">قیمت </th>
    </tr>
  </thead>

            <?php
            $row=mysqli_fetch_array($result);
            while($row)
            {
                ?>
                  <tbody>
    <tr>
      <th scope="row"><button class="btn btn-outline-secondary"><a class="lk" href="editcity.php?id=<?php echo($row["id"]); ?>" id="n2">تغییر</a></button></th>
      <td><button class="btn btn-outline-secondary"><a class="lk" href="deletecity.php?id=<?php echo($row["id"]); ?>" id="n1">حذف</a></button></td>
      <td><span> <?php echo($row["name"]);  ?> </span></td>
      <td><span>  <?php echo($row["ghymat"]);  ?> </span></td>

    </tr>

            <?php
             $row=mysqli_fetch_array($result);
            }
            ?>
                    </tbody>
                    </table>
    </div>
</div>
</div>
                </div>
            </div>
</div>