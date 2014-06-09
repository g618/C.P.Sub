C.P.Sub 公告系統
=======
<h4>前言</h4>

PHP 公告系統，用 CSV 格式建構出來的小型 PHP 程式。

基本上就是強化舊版的功能，改寫一下內部架構，並套用了 Bootstrap ，所以自行更換樣式！

如果使用上有遇到什麼問題，或是有程式上的建議、架構上的建議、甚至是功能上的建議，都歡迎來信告知。

當然，最重要的是要記得 Bug 回報～

=======

<h4>安裝方式</h4>

<h3>1. Server 健康檢查</h3>
<ul>
  <li>環境：PHP 5.3 以上 (建議)</li>
  <li>PHP.ini 設定：
    <ul>
      <ol>short_open_tag = on;</ol>
      <ol>file_uploads = on;</ol>
      <ol>allow_url_fopen = on;</ol>
    </ul>
  </li>
</ul>
<h3>2. 上傳至 FTP 目錄</h3>
<h3>3. 修改資料夾/目錄權限，改成 777</h3>
<ul> 
 <li>cpsub/upload/</li>
 <li>cpsub/db/article.txt</li>
 <li>cpsub/db/settings.txt</li>
</ul>
<ul>4. 修改帳號密碼
 <li>開啟 cpsub/config/config.php</li>
 <li>修改陣列數值</li>
 <code>
          $add_user	= array("username" => "admin", // 帳號
					"password" => "admin", // 密碼
					"nickname" => "管理員" // 管理員
					); 
 </code>
</ul>
