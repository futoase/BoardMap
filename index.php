<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="BoardMap">
    <title>MAP</title>
    <link href="js/button.css" rel="stylesheet" media="all" type="text/css" />
    <link href="js/map_style.css" rel="stylesheet" media="all" type="text/css" />
    <!-- <link href="/img/apple-touch-icon-120x120.png" sizes="120x120" rel="apple-touch-icon" /> -->

    <script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/jquery.m_map_data_manager.js"></script>
    <script type="text/javascript" src="js/date.js"></script>
    <script type="text/javascript" src="js/map-overlay.js"></script>
    <script type="text/javascript" src="js/map_main.js"></script>
</head>
<body>
<div id="header">
    <ul>
        <li class="distince">
            <span id="move_area_distince"></span>
        </li>
        <li class="status">
            <select id="move_area_status">
                <option value="open">未貼付</option>
                <option value="close">貼付完了</option>
                <option value="*">全て表示</option>
            </select>
        </li>
    </ul>
<a id="move_loc" href="javascript:void(0);" onclick="move_loc()" class="btn">付近の掲示板を表示</a>
<!--<a href="javascript:void(0);" onclick="show_float_panel('bookmark')" class="btn">MarkList</a>-->
<a id="info_btn" href="javascript:void(0);" onclick="show_float_panel('info')" class="btn">説明</a>
<a id="adv_btn" href="javascript:void(0);" onclick="show_float_panel('adv')" >★</a>
</div>
  <div id="float_panel">
        <a href="javascript:void(0);" onclick="hide_float_panel()" class="btn close">Close</a>

        <div id="bookmark">
            <textarea name="bookmark_list_txte" id="bookmark_list_txte" cols="45" rows="20"></textarea>
            <hr/>
            <a href="javascript:void(0);" onclick="clear_book_mark()" class="btn center">クリアー</a>
        </div>
        <div id="info">
            <iframe id="info_area" src="info.html" ></iframe>
        </div>
      <div id="adv">
              <ul>
                  <li>
                      <h1>行政区 一括選択</h1>
                      <p>表示する行政区を一括で表示します</p>
                      <p>注意）APIの負荷軽減の為、選択は最大5件までです。スマホ等ではフリーズする場合があります。</p>
                      <div id="area_list"></div>
                  </li>
                  <li>
                      <h1>[試験機能]住所で検索</h1>
                      <p>住所から、該当する地域の付近の掲示板を表示</p>
                      <p>注意）APIの都合場、その位置を中心とした近い順に最大100件のみ表示されます。</p>
                      <input name="move_area_address" class="input_text_mid" type="text" id="move_area_address" value=""/>
                      <a href="javascript:void(0);" onclick="move_area_address()" class="exec btn">移動</a>
                  </li>
                  <!--<a href="javascript:void(0);" onclick="show_info()" class="btn ">吹出し表示</a>-->
                    <li>
                        <h1>[試験機能]現在の地図の中心位置から近くの掲示板を表示</h1>
                        <p>現在表示している地図の位置にある掲示板を表示</p>
                        <p>注意）APIの都合場、その位置を中心とした近い順に最大100件のみ表示されます。</p>
                    </li>
              </ul>
      </div>
    </div>
  <div id="map_wrap" >
      <div id="map_data_receive_info_wrap"><img id="map_data_receive_roading_mark" src="js/marker_r.png" width="80" height="80" alt=""/><img id="map_data_receive_roading_img" src="js/loading.gif" width="80" height="80" alt=""/><div id="map_data_receive_info">未受信</div></div>
      <div id="map_canvas" ></div>
  </div>
<div id="load_lock"><img src="js/loading.gif" />検索中</div>
</body>
</html>
