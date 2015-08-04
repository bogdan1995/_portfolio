<?
class DB {
    const DB_NAME = 'data.db';
    private $_db;
    function __construct () {
        if (!file_exists(self::DB_NAME)) {
            $this->_db = new SQLite3(self::DB_NAME);
            $sql = 'CREATE TABLE db(
              id INTEGER PRIMARY KEY AUTOINCREMENT,
              site_name TEXT,
              link TEXT,
              img_link TEXT
)';
            $this->_db->exec($sql);
        } else {
            $this->_db = new SQLite3(self::DB_NAME);
        }
    }
    function __destruct () {
        $this ->_db->close();
    }
    function add2DB ($site_name, $link, $img_link){
        $sql = "INSERT INTO db (
                site_name,
                link,
                img_link
        ) VALUES (
                :site_name,
                :link,
                :img_link)";
        $stmt = $this -> _db -> prepare($sql);
        $stmt -> bindParam(':site_name', $site_name);
        $stmt -> bindParam(':link', $link);
        $stmt -> bindParam(':img_link', $img_link);
        $stmt -> execute();
        $stmt -> close();
    }
    function getDB () {
        $arr = array();
        $cnt = 0;
        $sql = "SELECT site_name, link, img_link FROM db";
        $stmt = $this ->_db -> prepare($sql);
        $result = $stmt -> execute();
        while ($row = $result -> fetchArray()) {
            $arr[$cnt]['site_name'] = $row['site_name'];
            $arr[$cnt]['link'] = $row['link'];
            $arr[$cnt]['img_link'] = $row['img_link'];
            $cnt++;
        }
        $stmt -> close();
        return $arr;
    }
}