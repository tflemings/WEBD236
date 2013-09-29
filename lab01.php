<?php
include_once 'templates.inc';
include_once 'urldao.php';
main_header("TrackURL");
$top5 = readTopFive();
?>
<p id="appName">TrackUrl Site</p>
<p>Hello. Please submit a URL and a NICKNAME that you would like to track.</p>
<fieldset>
    <legend>Input Your Data</legend>
    <form action="trackurl.php?selected=1&page=l01" method="post">
        <label id ="left">URL:</label>
        <label id="right">http://</label>
            <input id="url" name="url"/>
        <label>Nickname:</label>
            <input id="nickname" name="nickname"/><br />
        <button type="submit" id="submit" name="page" value="fizzbuzz">Submit</button>
    </form>
</fieldset> <br />
<div id="urls">
    <h1 id="tracked_sites">Top 5 Tracked Sites</h1>
    <table>
        <tr>
            <th>URL</th>
            <th>Nickname</th>
            <th>Count</th>
        </tr> <?php
foreach($top5 as $row) { ?>
        <tr>
            <td><?php echo $row['url']; ?></td>
            <td><?php echo $row['nickname']; ?></td>
            <td><?php echo $row['click_count']; ?></td>
        </tr> <?php
} ?>
    </table>
</div>
<?php
main_footer();
?>
