<fieldset class="fld">
    <legend>logo更換</legend>
    <form action="./api/edit.php" method="post">
        <table>
            <tr>
                <th>圖片</th>
                <th>替代文字</th>
                <th>顯示</th>
                <th>刪除</th>
            </tr>
        </table>
        <?php
        $data = $Logo->all(['id' => 1]);
        dd($data);
        ?>
    </form>
</fieldset>

<button onclick="op()">新增標題</button>

<script>
    function op() {
        $.get("./api/insert.php", (data) => {
            console.log('data', data);
        })
    }
</script>