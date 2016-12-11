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
