<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {
      'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var selectValue = document.getElementById("selectThongKe").value;
      var rows = new Array()
      var tenhh = new Array();
      var soluongban = new Array();
      var dataten = 0;
      var slb = 0;
      var chuyen=0;
      var month= new Array();
      var data = new google.visualization.DataTable();
      // số lượng bán nhiều nhất
      if (selectValue === "asc") {
        var options = {
          title: 'Thống kê số lượng bán nhiều nhất',
          titleTextStyle: {
            fontSize: 20,
            bold: true,
            color: '#ff0000',
          },
          width: 600,
          height: 500,
          backgroundColor: '#afa',
          is3D: true,
        };
        <?php
        $hh = new hanghoa();
        $result = $hh->getThongKeAsc();
        while ($set = $result->fetch()) {
          $tenhh = $set['tensp'];
          $soluong = $set['soluong'];
          if (strlen($tenhh) > 20) {
            $tenhh = substr($tenhh, 0, 34) . "..";
          }
          echo "tenhh.push('" . $tenhh . "');";
          echo "soluongban.push('" . $soluong . "');";
        }
        ?>
        //+ tạo dòng
        for (var i = 0; i < Math.min(soluongban.length, 3); i++) {
          dataten = tenhh[i];
          slb = parseInt(soluongban[i]);
          rows.push([{
            v: dataten,
            f: tenhh[i]
          }, slb]);
        }
      }
      // số lượng bán ít nhất
      else if (selectValue === "desc") {
        var options = {
          title: 'Thống kê số lượng bán ít nhất',
          titleTextStyle: {
            fontSize: 20,
            bold: true,
            color: '#ff0000',
          },
          width: 600,
          height: 500,
          backgroundColor: '#afa',
          is3D: true,
        };
        <?php
        $hh = new hanghoa();
        $result = $hh->getThongKeDesc();
        $count = 0;
        while ($set = $result->fetch()) {
          $tenhh = $set['tensp'];
          $soluong = $set['soluong'];
          if (strlen($tenhh) > 20) {
            $tenhh = substr($tenhh, 0, 34) . "..";
          }
          echo "tenhh.push('" . $tenhh . "');";
          echo "soluongban.push('" . $soluong . "');";
        }
        ?>
        //+ tạo dòng
        for (var i = Math.min(soluongban.length, 3); i >= 0; i--) {
          var slb = parseInt(soluongban[i]);
          var dataten = tenhh[i];
          rows.push([{
            v: dataten,
            f: tenhh[i]
          }, slb]);
        }
      }
      // thống kê theo năm
      else if (selectValue === "year") {
        $chuyen=1
        var options = {
          title: 'Thống kê số lượng bán năm 2024 theo Tháng',
          titleTextStyle: {
            fontSize: 20,
            bold: true,
            color: '#ff0000',
          },
          width: 600,
          height: 500,
          backgroundColor: '#afa',
          is3D: true,
        };
        <?php
        $hh = new hanghoa();
        $result = $hh->getThongKeYear();
        
        while ($set = $result->fetch()) {
          $thang = $set['thang'];
          $soluong = $set['soluong'];
          echo "month.push('Tháng " . $thang . "');";
          echo "soluongban.push('" . $soluong . "');";
        }
        ?>
        //+ tạo dòng
        for (var i = 0; i < month.length; i++) {
          var slb = parseInt(soluongban[i]);
          var dataten = month[i];
          rows.push([{
            v: dataten,
            f: month[i]
          }, slb]);
        }
      }
      if($chuyen=0)
      {
        data.addColumn('string', 'Tên hàng hóa');
        data.addColumn('number', 'Số lượng bán');
      }
      else{
        data.addColumn('string', 'Tháng');
        data.addColumn('number', 'Số lượng bán');
      }
      
      data.addRows(rows)

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);

    }
  </script>
</head>

<body>
  <div class="thongke offset-md-1 ">
    <div class="row">
      <div class="col-md-6 form-group">
        <select name="selectThongKe" id="selectThongKe" class="form-control" onchange="drawChart()">
          <option value="asc">Sản phẩm có số lượng bán nhiều nhất</option>
          <option value="desc">Sản phẩm có số lượng bán ít nhất</option>
          <option value="year">Thống kê Doanh thu Sản phẩm năm 2024</option>
        </select>
      </div>
      <div id="chart_div" class="col-md-6"></div>
    </div>
  </div>
</body>

</html>