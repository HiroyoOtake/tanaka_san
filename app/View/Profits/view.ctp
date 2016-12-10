<!-- <div style="width: 100%; height: 80px;"> -->
    <!-- <span style="float: left;"><h2><?= $shop['Shop']['name']; ?></h2></span> -->
<!--     <span style="float: right;"><h3><?= $shop['Shop']['tel']; ?></h3></span> -->
<!-- </div> -->

<div>
    <h2>利益詳細</h2>
    <table>
        <tbody>
        <tr>
	    <td style="width: 25%;">売上</td>
            <td style="width: 75%;"><?= $profit['Profit']['earnings']; ?>円</td>
        </tr>
        <tr>
	    <td>諸経費</td>
            <td><?= $profit['Profit']['cost']; ?>円</td>
        </tr>
        <tr>
	    <td style="font-weight:bolder;">利益</td>
            <td style="font-weight:bolder;"><?= $profit['Profit']['profit']; ?>円</td>
        </tr>
        </tbody>
    </table>
</div>
