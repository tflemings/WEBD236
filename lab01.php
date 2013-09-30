<?php
include_once 'templates.inc';
include_once 'urldao.php';
main_header("TrackURL");
$top5 = readTopFive();
?>
<p id="appName">TrackUrl Site</p>
<p>Please use the forms below to register or visit a site.</p>
<fieldset>
    <legend>Register A Site</legend>
    <form action="trackurl.php?selected=1&page=l01" method="post">
        <label id ="left">URL:</label>
        <label id="right">http://</label>
            <input id="url" name="url"/>
        <label>Nickname:</label>
            <input id="nickname" name="nickname"/><br />
        <button type="submit" id="submit" name="page" value="fizzbuzz">Submit</button>
    </form>
</fieldset> <br />
<fieldset>
    <legend>Go To A Site</legend>
    <form action="view_site.php" method="post">
        <label>Enter Nickname:</label>
            <input id="goto" name="name"/>
            <button type="submit" id="submit" name="page" value="l01">GO</button>
    </form>
</fieldset>
<div id="urls">
    <h1 id="tracked_sites">Top 5 Tracked Sites</h1>
    <table>
        <tr>
            <th>URL</th>
            <th>Nickname</th>
            <th>Count</th>
        </tr> <?php
foreach($top5 as $row) { 
    $url = $row['url'];
    $nickname = $row['nickname'];
    $count = $row['click_count'];  ?>
        <tr>
            <td><a href="<?php echo "view_site.php?name=$nickname"; ?>"><?php echo $url; ?></a></td>
            <td><?php echo $nickname; ?></td>
            <td><?php echo $count; ?></td>
        </tr> <?php
} ?>
    </table>
</div>
<?php
main_footer();
?>
