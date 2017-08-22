<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title>Unote Editor</title>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/ko_KR/smart_editor2.css" rel="stylesheet" type="text/css">
    <link href="css/ko_KR/editor_common.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <script type="text/javascript" src="./js/lib/jindo2.all.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/lib/jindo_component.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/service/SE2M_Configuration.js" charset="utf-8"></script>   <!-- 설정 파일 -->
    <script type="text/javascript" src="./js/service/SE2BasicCreator.js" charset="utf-8"></script>
    <!--HuskyApp JS Start-->
    <!-- 허스키 프레임웍 -->
    <script type="text/javascript" src="./js_src/husky_framework/HuskyCore.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/husky_framework/HuskyRange.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/husky_framework/hp_CorePlugin.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/husky_framework/hp_HuskyRangeManager.js" charset="utf-8"></script>
    <!-- 공통 : 기본 -->
    <script type="text/javascript" src="./js_src/common/base/hp_SE2M_Toolbar.js" charset="utf-8"></script>
    <!-- 편집 -->
    <script type="text/javascript" src="./js_src/fundamental/editing/hp_SE_EditingAreaManager.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/editing/hp_SE_EditingArea_WYSIWYG.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/editing/hp_SE_EditingArea_HTMLSrc.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/editing/hp_SE_EditingArea_TEXT.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/editing/hp_SE_EditingAreaVerticalResizer.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/editing/hp_SE_WYSIWYGEnterKey.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/editing/hp_SE2M_EditingModeChanger.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/editing/hp_SE_PasteHandler.js" charset="utf-8"></script>
    <!-- 1단 툴바 : 기본 -->
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_ExecCommand.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE_WYSIWYGStyler.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE_WYSIWYGStyleGetter.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_FontSizeWithLayerUI.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_LineStyler.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_LineHeightWithLayerUI.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_ColorPalette.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_FontColor.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_BGColor.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_Hyperlink.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_FontNameWithLayerUI.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/colorpicker.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_Accessibility.js" charset="utf-8"></script>
    <!-- 1단 툴바 : 확장 -->
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_SCharacter.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_FindReplacePlugin.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_Quote.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_TableCreator.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_TableBlockStyler.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_StyleRemover.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_TableEditor.js" charset="utf-8"></script>
    <!-- 퀵에디터 -->
    <script type="text/javascript" src="./js_src/quick_editor/hp_SE2M_QuickEditor_Common.js" charset="utf-8"></script>
    <!-- 단축키 -->
    <script type="text/javascript" src="./js_src/shortcut/shortcut.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/shortcut/hp_Hotkey.js" charset="utf-8"></script>
    <!-- Undo/Redo -->
    <script type="text/javascript" src="./js_src/undo_redo/hp_SE_UndoRedo.js" charset="utf-8"></script>
    <!-- 유틸 -->
    <script type="text/javascript" src="./js_src/util/hp_Utils.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/hp_DialogLayerManager.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/hp_ActiveLayerManager.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/hp_StringConverterManager.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/hp_MessageManager.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/hp_LazyLoader.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/hp_PopupManager.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/hp_SE2M_Utils.js"></script>
    <script type="text/javascript" src="./js_src/util/hp_SE2B_CSSLoader.js" charset="utf-8"></script>       <!-- Basic 버전에서 사용하지 않는 메시지를 제거한 버전 -->
    <!-- SE2.0 Open 전용 -->
    <script type="text/javascript" src="./js/service/husky_SE2B_Lang_ko_KR.js" charset="utf-8"></script><!-- Basic 버전에서 사용하는 알림 메시지 -->
    <script type="text/javascript" src="./js/service/husky_SE2B_Lang_en_US.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/service/husky_SE2B_Lang_ja_JP.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/service/husky_SE2B_Lang_zh_CN.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/service/husky_SE2B_Lang_zh_TW.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/service/hp_SE_OuterIFrameControl.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/service/hp_SE_ToolbarToggler.js" charset="utf-8"></script>
    <!--HuskyApp JS End-->
    <!--Remove Start-->
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_FindReplacePlugin$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_Quote$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_SCharacter$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_TableCreator$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/hp_SE2M_TableEditor$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_BGColor$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_FontColor$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_Hyperlink$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/base/hp_SE2M_LineHeightWithLayerUI$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/quick_editor/hp_SE2M_QuickEditor_Common$Lazy.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/hp_DialogLayerManager$Lazy.js" charset="utf-8"></script>

    <script type="text/javascript" src="./js_src/fundamental/advanced/N_FindReplace.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/fundamental/advanced/SE2M_TableTemplate.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js_src/util/N_DraggableLayer.js" charset="utf-8"></script>
    <!--Remove End-->
</head>
<body>
<div id="wrap">
    <!--header-->
    <div id="editorHeader">
        <h1><a href="http://unote.eduniety.net/unoteapi/note/list"><img src="images/edi_logo.png" alt="글동로고"></a></h1>
        <div class="edi-hinner clearfix">
            <div class="edi-left clearfix">
                <div class="edi-tit">
                    <div class="noteTit"><input type="text" value="제목 없는 문서"></div>
                    <div class="ediBtn"></div>
                </div>

            </div>
            <div class="edi-right">
                <!--userInfo-->
                <div class="userInfo clearfix">
                    <div class="pic"><img src="images/junghun.jpg"></div>
                    <div class="name"><a href="#"><span>정훈</span> 님 <i class="fa fa-caret-down" aria-hidden="true"></i></a></div>
                </div>

                <!--//userInfo-->
                <!--로그아웃창-->
                <div class="userBtn">
                    <div class="userBtn-inner">
                        <ul>
                            <li><a href="/unoteapi/Logout"><i class="fa fa-sign-out" aria-hidden="true"></i>로그아웃</a></li>
                            <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i>개인정보처리방침</a></li>
                        </ul>
                    </div>
                </div>
                <!--//로그아웃창-->
            </div>
        </div>
    </div>
    <!--//header-->
    <!--contents-->
    <div id="editorCont" class="clearfix">
        <div class="left">
            <!--확장버튼-->
            <div class="expandBtn">
                <div class="expand-inner" title="addOn"><i class="fa fa-expand" aria-hidden="true"></i></div>
            </div>
            <!-- SE2 Markup Start -->
            <div id="smart_editor2">
                <div id="smart_editor2_content"><a href="#se2_iframe" class="blind">글쓰기영역으로 바로가기</a>
                    <div class="se2_tool" id="se2_tool">

                        <div class="se2_text_tool husky_seditor_text_tool">
                            <ul class="se2_font_type">
                                <li class="husky_seditor_ui_fontName"><button type="button" class="se2_font_family" title="글꼴"><span class="husky_se2m_current_fontName">글꼴</span><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                    <!-- 글꼴 레이어 -->
                                    <div class="se2_layer husky_se_fontName_layer">
                                        <div class="se2_in_layer">
                                            <ul class="se2_l_font_fam">
                                                <li style="display:none"><button type="button"><span>@DisplayName@<span>(</span><em style="font-family:FontFamily;">@SampleText@</em><span>)</span></span></button></li>
                                                <li class="se2_division husky_seditor_font_separator"></li>
                                                <li><button type="button"><span>나눔고딕<span>(</span><em style="font-family:'나눔고딕',NanumGothic;">가나다라</em><span>)</span></span></button></li>
                                                <li><button type="button"><span>나눔명조<span>(</span><em style="font-family:'나눔명조',NanumMyeongjo;">가나다라</em><span>)</span></span></button></li>
                                                <li><button type="button"><span>나눔고딕코딩<span>(</span><em style="font-family:'나눔고딕코딩',NanumGothicCoding;">가나다라</em><span>)</span></span></button></li>
                                                <li><button type="button"><span>나눔바른고딕<span>(</span><em style="font-family:'나눔바른고딕',NanumBarunGothic,NanumBarunGothicOTF;">가나다라</em><span>)</span></span></button></li>
                                                <li><button type="button"><span>나눔바른펜<span>(</span><em style="font-family:'나눔바른펜',NanumBarunpen;">가나다라</em><span>)</span></span></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- //글꼴 레이어 -->
                                </li>

                                <li class="husky_seditor_ui_fontSize"><button type="button" class="se2_font_size" title="글자크기"><span class="husky_se2m_current_fontSize">크기</span><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                    <!-- 폰트 사이즈 레이어 -->
                                    <div class="se2_layer husky_se_fontSize_layer">
                                        <div class="se2_in_layer">
                                            <ul class="se2_l_font_size">
                                                <li><button type="button"><span style="margin-top:4px; margin-bottom:3px; margin-left:5px; font-size:7pt;">가나다라마바사<span style=" font-size:7pt;">(7pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-bottom:2px; font-size:8pt;">가나다라마바사<span style="font-size:8pt;">(8pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-bottom:1px; font-size:9pt;">가나다라마바사<span style="font-size:9pt;">(9pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-bottom:1px; font-size:10pt;">가나다라마바사<span style="font-size:10pt;">(10pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-bottom:2px; font-size:11pt;">가나다라마바사<span style="font-size:11pt;">(11pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-bottom:1px; font-size:12pt;">가나다라마바사<span style="font-size:12pt;">(12pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-bottom:2px; font-size:14pt;">가나다라마바사<span style="margin-left:6px;font-size:14pt;">(14pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-bottom:1px; font-size:18pt;">가나다라마바사<span style="margin-left:8px;font-size:18pt;">(18pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-left:3px; font-size:24pt;">가나다라마<span style="margin-left:11px;font-size:24pt;">(24pt)</span></span></button></li>
                                                <li><button type="button"><span style="margin-top:-1px; margin-left:3px; font-size:36pt;">가나다<span style="font-size:36pt;">(36pt)</span></span></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- //폰트 사이즈 레이어 -->
                                </li>
                            </ul>
                            <ul>
                                <li class="husky_seditor_ui_bold first_child"><button type="button" title="굵게[Ctrl+B]" class="se2_bold"><!--<i class="fa fa-bold" aria-hidden="true"></i>--><img src="images/icon/icon_bold.png"><span class="_buttonRound tool_bg">굵게[Ctrl+B]</span></button></li>

                                <li class="husky_seditor_ui_underline"><button type="button" title="밑줄[Ctrl+U]" class="se2_underline"><!--<i class="fa fa-underline" aria-hidden="true"></i>--><img src="images/icon/icon_underline.png"><span class="_buttonRound">밑줄[Ctrl+U]</span></button></li>

                                <li class="husky_seditor_ui_italic"><button type="button" title="기울임꼴[Ctrl+I]" class="se2_italic"><!--<i class="fa fa-italic" aria-hidden="true"></i>--><img src="images/icon/icon_italic.png"><span class="_buttonRound">기울임꼴[Ctrl+I]</span></button></li>
                                <!--<li class="husky_seditor_ui_lineThrough"><button type="button" title="취소선[Ctrl+D]" class="se2_tdel"><span class="_buttonRound">취소선[Ctrl+D]</span></button></li>-->
                                <!--글자색-->
                                <li class="se2_pair husky_seditor_ui_fontColor" style="display:none"><span class="selected_color husky_se2m_fontColor_lastUsed" style="background-color:#4477f9"></span><span class="husky_seditor_ui_fontColorA"><button type="button" title="글자색" class="se2_fcolor"><span>글자색</span></button></span><span class="husky_seditor_ui_fontColorB"><button type="button" title="더보기" class="se2_fcolor_more"><span class="_buttonRound">더보기</span></button></span>
                                    <!-- 글자색 -->
                                    <div class="se2_layer husky_se2m_fontcolor_layer" style="display:none">
                                        <div class="se2_in_layer husky_se2m_fontcolor_paletteHolder">
                                            <div class="se2_palette husky_se2m_color_palette">
                                                <ul class="se2_pick_color">
                                                    <li><button type="button" title="#ff0000" style="background:#ff0000"><span><span>#ff0000</span></span></button></li>
                                                    <li><button type="button" title="#ff6c00" style="background:#ff6c00"><span><span>#ff6c00</span></span></button></li>
                                                    <li><button type="button" title="#ffaa00" style="background:#ffaa00"><span><span>#ffaa00</span></span></button></li>
                                                    <li><button type="button" title="#ffef00" style="background:#ffef00"><span><span>#ffef00</span></span></button></li>
                                                    <li><button type="button" title="#a6cf00" style="background:#a6cf00"><span><span>#a6cf00</span></span></button></li>
                                                    <li><button type="button" title="#009e25" style="background:#009e25"><span><span>#009e25</span></span></button></li>
                                                    <li><button type="button" title="#00b0a2" style="background:#00b0a2"><span><span>#00b0a2</span></span></button></li>
                                                    <li><button type="button" title="#0075c8" style="background:#0075c8"><span><span>#0075c8</span></span></button></li>
                                                    <li><button type="button" title="#3a32c3" style="background:#3a32c3"><span><span>#3a32c3</span></span></button></li>
                                                    <li><button type="button" title="#7820b9" style="background:#7820b9"><span><span>#7820b9</span></span></button></li>
                                                    <li><button type="button" title="#ef007c" style="background:#ef007c"><span><span>#ef007c</span></span></button></li>
                                                    <li><button type="button" title="#000000" style="background:#000000"><span><span>#000000</span></span></button></li>
                                                    <li><button type="button" title="#252525" style="background:#252525"><span><span>#252525</span></span></button></li>
                                                    <li><button type="button" title="#464646" style="background:#464646"><span><span>#464646</span></span></button></li>
                                                    <li><button type="button" title="#636363" style="background:#636363"><span><span>#636363</span></span></button></li>
                                                    <li><button type="button" title="#7d7d7d" style="background:#7d7d7d"><span><span>#7d7d7d</span></span></button></li>
                                                    <li><button type="button" title="#9a9a9a" style="background:#9a9a9a"><span><span>#9a9a9a</span></span></button></li>
                                                    <li><button type="button" title="#ffe8e8" style="background:#ffe8e8"><span><span>#9a9a9a</span></span></button></li>
                                                    <li><button type="button" title="#f7e2d2" style="background:#f7e2d2"><span><span>#f7e2d2</span></span></button></li>
                                                    <li><button type="button" title="#f5eddc" style="background:#f5eddc"><span><span>#f5eddc</span></span></button></li>
                                                    <li><button type="button" title="#f5f4e0" style="background:#f5f4e0"><span><span>#f5f4e0</span></span></button></li>
                                                    <li><button type="button" title="#edf2c2" style="background:#edf2c2"><span><span>#edf2c2</span></span></button></li>
                                                    <li><button type="button" title="#def7e5" style="background:#def7e5"><span><span>#def7e5</span></span></button></li>
                                                    <li><button type="button" title="#d9eeec" style="background:#d9eeec"><span><span>#d9eeec</span></span></button></li>
                                                    <li><button type="button" title="#c9e0f0" style="background:#c9e0f0"><span><span>#c9e0f0</span></span></button></li>
                                                    <li><button type="button" title="#d6d4eb" style="background:#d6d4eb"><span><span>#d6d4eb</span></span></button></li>
                                                    <li><button type="button" title="#e7dbed" style="background:#e7dbed"><span><span>#e7dbed</span></span></button></li>
                                                    <li><button type="button" title="#f1e2ea" style="background:#f1e2ea"><span><span>#f1e2ea</span></span></button></li>
                                                    <li><button type="button" title="#acacac" style="background:#acacac"><span><span>#acacac</span></span></button></li>
                                                    <li><button type="button" title="#c2c2c2" style="background:#c2c2c2"><span><span>#c2c2c2</span></span></button></li>
                                                    <li><button type="button" title="#cccccc" style="background:#cccccc"><span><span>#cccccc</span></span></button></li>
                                                    <li><button type="button" title="#e1e1e1" style="background:#e1e1e1"><span><span>#e1e1e1</span></span></button></li>
                                                    <li><button type="button" title="#ebebeb" style="background:#ebebeb"><span><span>#ebebeb</span></span></button></li>
                                                    <li><button type="button" title="#ffffff" style="background:#ffffff"><span><span>#ffffff</span></span></button></li>
                                                </ul>
                                                <ul class="se2_pick_color" style="width:156px;">
                                                    <li><button type="button" title="#e97d81" style="background:#e97d81"><span><span>#e97d81</span></span></button></li>
                                                    <li><button type="button" title="#e19b73" style="background:#e19b73"><span><span>#e19b73</span></span></button></li>
                                                    <li><button type="button" title="#d1b274" style="background:#d1b274"><span><span>#d1b274</span></span></button></li>
                                                    <li><button type="button" title="#cfcca2" style="background:#cfcca2"><span><span>#cfcca2</span></span></button></li>
                                                    <li><button type="button" title="#cfcca2" style="background:#cfcca2"><span><span>#cfcca2</span></span></button></li>
                                                    <li><button type="button" title="#61b977" style="background:#61b977"><span><span>#61b977</span></span></button></li>
                                                    <li><button type="button" title="#53aea8" style="background:#53aea8"><span><span>#53aea8</span></span></button></li>
                                                    <li><button type="button" title="#518fbb" style="background:#518fbb"><span><span>#518fbb</span></span></button></li>
                                                    <li><button type="button" title="#6a65bb" style="background:#6a65bb"><span><span>#6a65bb</span></span></button></li>
                                                    <li><button type="button" title="#9a54ce" style="background:#9a54ce"><span><span>#9a54ce</span></span></button></li>
                                                    <li><button type="button" title="#e573ae" style="background:#e573ae"><span><span>#e573ae</span></span></button></li>
                                                    <li><button type="button" title="#5a504b" style="background:#5a504b"><span><span>#5a504b</span></span></button></li>
                                                    <li><button type="button" title="#767b86" style="background:#767b86"><span><span>#767b86</span></span></button></li>
                                                    <li><button type="button" title="#951015" style="background:#951015"><span><span>#951015</span></span></button></li>
                                                    <li><button type="button" title="#6e391a" style="background:#6e391a"><span><span>#6e391a</span></span></button></li>
                                                    <li><button type="button" title="#785c25" style="background:#785c25"><span><span>#785c25</span></span></button></li>
                                                    <li><button type="button" title="#5f5b25" style="background:#5f5b25"><span><span>#5f5b25</span></span></button></li>
                                                    <li><button type="button" title="#4c511f" style="background:#4c511f"><span><span>#4c511f</span></span></button></li>
                                                    <li><button type="button" title="#1c4827" style="background:#1c4827"><span><span>#1c4827</span></span></button></li>
                                                    <li><button type="button" title="#0d514c" style="background:#0d514c"><span><span>#0d514c</span></span></button></li>
                                                    <li><button type="button" title="#1b496a" style="background:#1b496a"><span><span>#1b496a</span></span></button></li>
                                                    <li><button type="button" title="#2b285f" style="background:#2b285f"><span><span>#2b285f</span></span></button></li>
                                                    <li><button type="button" title="#45245b" style="background:#45245b"><span><span>#45245b</span></span></button></li>
                                                    <li><button type="button" title="#721947" style="background:#721947"><span><span>#721947</span></span></button></li>
                                                    <li><button type="button" title="#352e2c" style="background:#352e2c"><span><span>#352e2c</span></span></button></li>
                                                    <li><button type="button" title="#3c3f45" style="background:#3c3f45"><span><span>#3c3f45</span></span></button></li>
                                                </ul>
                                                <button type="button" title="더보기" class="se2_view_more husky_se2m_color_palette_more_btn"><span>더보기</span></button>
                                                <div class="husky_se2m_color_palette_recent" style="display:none">
                                                    <h4>최근 사용한 색</h4>
                                                    <ul class="se2_pick_color">
                                                        <li></li>
                                                        <!-- 최근 사용한 색 템플릿 -->
                                                        <!-- <li><button type="button" title="#e97d81" style="background:#e97d81"><span><span>#e97d81</span></span></button></li> -->
                                                        <!-- //최근 사용한 색 템플릿 -->
                                                    </ul>
                                                </div>
                                                <div class="se2_palette2 husky_se2m_color_palette_colorpicker">
                                                    <!--form action="http://test.emoticon.naver.com/colortable/TextAdd.nhn" method="post"-->
                                                    <div class="se2_color_set">
                                                        <span class="se2_selected_color"><span class="husky_se2m_cp_preview" style="background:#e97d81"></span></span><input type="text" name="" class="input_ty1 husky_se2m_cp_colorcode" value="#e97d81"><button type="button" class="se2_btn_insert husky_se2m_color_palette_ok_btn" title="입력"><span>입력</span></button></div>
                                                    <!--input type="hidden" name="callback" value="http://test.emoticon.naver.com/colortable/result.jsp" />
                                                    <input type="hidden" name="callback_func" value="1" />
                                                    <input type="hidden" name="text_key" value="" />
                                                    <input type="hidden" name="text_data" value="" />
                                                </form-->
                                                    <div class="se2_gradation1 husky_se2m_cp_colpanel"></div>
                                                    <div class="se2_gradation2 husky_se2m_cp_huepanel"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //글자색 -->
                                </li>
                                <!--배경색-->
                                <li class="se2_pair husky_seditor_ui_BGColor" style="display:none"><span class="selected_color husky_se2m_BGColor_lastUsed" style="background-color:#4477f9"></span><span class="husky_seditor_ui_BGColorA"><button type="button" title="배경색" class="se2_bgcolor"><span>배경색</span></button></span><span class="husky_seditor_ui_BGColorB"><button type="button" title="더보기" class="se2_bgcolor_more"><span class="_buttonRound">더보기</span></button></span>
                                    <!-- 배경색 -->
                                    <div class="se2_layer se2_layer husky_se2m_BGColor_layer" style="display:none">
                                        <div class="se2_in_layer">
                                            <div class="se2_palette_bgcolor">
                                                <ul class="se2_background husky_se2m_bgcolor_list">
                                                    <li><button type="button" title="배경색#ff0000 글자색#ffffff" style="background:#ff0000; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#6d30cf 글자색#ffffff" style="background:#6d30cf; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#000000 글자색#ffffff" style="background:#000000; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#ff6600 글자색#ffffff" style="background:#ff6600; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#3333cc 글자ffffff" style="background:#3333cc; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#333333 글자색#ffff00" style="background:#333333; color:#ffff00"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#ffa700 글자색#ffffff" style="background:#ffa700; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#009999 글자색#ffffff" style="background:#009999; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#8e8e8e 글자색#ffffff" style="background:#8e8e8e; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#cc9900 글자색#ffffff" style="background:#cc9900; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#77b02b 글자색#ffffff" style="background:#77b02b; color:#ffffff"><span><span>가나다</span></span></button></li>
                                                    <li><button type="button" title="배경색#ffffff 글자색#000000" style="background:#ffffff; color:#000000"><span><span>가나다</span></span></button></li>
                                                </ul>
                                            </div>
                                            <div class="husky_se2m_BGColor_paletteHolder"></div>
                                        </div>
                                    </div>
                                    <!-- //배경색 -->
                                </li>
                            </ul>
                            <ul  style="display:none">
                                <li class="husky_seditor_ui_superscript"  style="display:none"><button type="button" title="윗첨자" class="se2_sup"><span class="_buttonRound">윗첨자</span></button></li>

                                <li class="husky_seditor_ui_subscript last_child"  style="display:none"><button type="button" title="아래첨자" class="se2_sub"><span class="_buttonRound tool_bg">아래첨자</span></button></li>
                            </ul>
                            <ul>

                                <li class="husky_seditor_ui_justifyleft first_child"><button type="button" title="왼쪽정렬" class="se2_left"><!--<i class="fa fa-align-left" aria-hidden="true"></i>--><img src="images/icon/icon_align_left.png"><span class="_buttonRound tool_bg">왼쪽정렬</span></button></li>

                                <li class="husky_seditor_ui_justifycenter"><button type="button" title="가운데정렬" class="se2_center"><!--<i class="fa fa-align-center" aria-hidden="true"></i>--><img src="images/icon/icon_align_center.png"><span class="_buttonRound">가운데정렬</span></button></li>

                                <li class="husky_seditor_ui_justifyright"><button type="button" title="오른쪽정렬" class="se2_right"><!--<i class="fa fa-align-right" aria-hidden="true"></i>--><img src="images/icon/icon_align_right.png"><span class="_buttonRound">오른쪽정렬</span></button></li>

                                <li class="husky_seditor_ui_justifyful"  style="display:none"><button type="button" title="양쪽정렬" class="se2_justify"><span class="_buttonRound">양쪽정렬</span></button></li>

                                <li class="husky_seditor_ui_orderedlist"  style="display:none"><button type="button" title="번호매기기" class="se2_ol"><span class="_buttonRound">번호매기기</span></button></li>

                                <li class="husky_seditor_ui_unorderedlist"  style="display:none"><button type="button" title="글머리기호" class="se2_ul"><span class="_buttonRound">글머리기호</span></button></li>

                                <li class="husky_seditor_ui_outdent"  style="display:none"><button type="button" title="내어쓰기[Shift+Tab]" class="se2_outdent"><span class="_buttonRound">내어쓰기[Shift+Tab]</span></button></li>

                                <li class="husky_seditor_ui_indent"  style="display:none"><button type="button" title="들여쓰기[Tab]" class="se2_indent"><span class="_buttonRound">들여쓰기[Tab]</span></button></li>

                                <li class="husky_seditor_ui_lineHeight last_child"><button type="button" title="줄간격" class="se2_lineheight"><i class="fa fa-text-height" aria-hidden="true"></i><!--<img src="images/icon/icon_edit_line.png">--><span class="_buttonRound tool_bg">줄간격</span><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                    <!-- 줄간격 레이어 -->
                                    <div class="se2_layer husky_se2m_lineHeight_layer">
                                        <div class="se2_in_layer">
                                            <ul class="se2_l_line_height">
                                                <li><button type="button"><span>50%</span></button></li>
                                                <li><button type="button"><span>80%</span></button></li>
                                                <li><button type="button"><span>100%</span></button></li>
                                                <li><button type="button"><span>120%</span></button></li>
                                                <li><button type="button"><span>150%</span></button></li>
                                                <li><button type="button"><span>180%</span></button></li>
                                                <li><button type="button"><span>200%</span></button></li>
                                            </ul>
                                            <div class="se2_l_line_height_user husky_se2m_lineHeight_direct_input">
                                                <h3>직접 입력</h3>
                                                <span class="bx_input">
                                            <input type="text" class="input_ty1" maxlength="3" style="width:75px">
                                            <button type="button" title="1% 더하기" class="btn_up"><span>1% 더하기</span></button>
                                            <button type="button" title="1% 빼기" class="btn_down"><span>1% 빼기</span></button>
                                            </span>
                                                <div class="btn_area">
                                                    <button type="button" class="se2_btn_apply3"><span>적용</span><div>적용</div></button><button type="button" class="se2_btn_cancel3"><span>취소</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //줄간격 레이어 -->
                                </li>
                            </ul>
                            <ul  style="display:none">
                                <li class="husky_seditor_ui_quote single_child "><button type="button" title="인용구" class="se2_blockquote"><span class="_buttonRound tool_bg">인용구</span></button>
                                    <!-- 인용구 -->
                                    <div class="se2_layer husky_seditor_blockquote_layer" style="margin-left:-407px; display:none;">
                                        <div class="se2_in_layer">
                                            <div class="se2_quote">
                                                <ul>
                                                    <li class="q1"><button type="button" class="se2_quote1"><span><span>인용구 스타일1</span></span></button></li>
                                                    <li class="q2"><button type="button" class="se2_quote2"><span><span>인용구 스타일2</span></span></button></li>
                                                    <li class="q3"><button type="button" class="se2_quote3"><span><span>인용구 스타일3</span></span></button></li>
                                                    <li class="q4"><button type="button" class="se2_quote4"><span><span>인용구 스타일4</span></span></button></li>
                                                    <li class="q5"><button type="button" class="se2_quote5"><span><span>인용구 스타일5</span></span></button></li>
                                                    <li class="q6"><button type="button" class="se2_quote6"><span><span>인용구 스타일6</span></span></button></li>
                                                    <li class="q7"><button type="button" class="se2_quote7"><span><span>인용구 스타일7</span></span></button></li>
                                                    <li class="q8"><button type="button" class="se2_quote8"><span><span>인용구 스타일8</span></span></button></li>
                                                    <li class="q9"><button type="button" class="se2_quote9"><span><span>인용구 스타일9</span></span></button></li>
                                                    <li class="q10"><button type="button" class="se2_quote10"><span><span>인용구 스타일10</span></span></button></li>
                                                </ul>
                                                <button type="button" class="se2_cancel2"><span>적용취소</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //인용구 -->
                                </li>
                            </ul>
                            <ul>
                                <li class="husky_seditor_ui_hyperlink first_child"  style="display:none"><button type="button" title="링크" class="se2_url"><span class="_buttonRound tool_bg">링크</span></button>
                                    <!-- 링크 -->
                                    <div class="se2_layer" style="margin-left:-285px">
                                        <div class="se2_in_layer">
                                            <div class="se2_url2">
                                                <input type="text" class="input_ty1" value="http://">
                                                <button type="button" class="se2_apply"><span>적용</span></button><button type="button" class="se2_cancel"><span>취소</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //링크 -->
                                </li>

                                <li class="husky_seditor_ui_sCharacter"  style="display:none"><button type="button" title="특수기호" class="se2_character"><span class="_buttonRound">특수기호</span></button>
                                    <!-- 특수기호 -->
                                    <div class="se2_layer husky_seditor_sCharacter_layer" style="margin-left:-448px;">
                                        <div class="se2_in_layer">
                                            <div class="se2_bx_character">
                                                <ul class="se2_char_tab">
                                                    <li class="active"><button type="button" title="일반기호" class="se2_char1"><span>일반기호</span></button>
                                                        <div class="se2_s_character">
                                                            <ul class="husky_se2m_sCharacter_list">
                                                                <li></li>
                                                                <!-- 일반기호 목록 -->
                                                                <!-- <li class="hover"><button type="button"><span>｛</span></button></li><li class="active"><button type="button"><span>｝</span></button></li><li><button type="button"><span>〔</span></button></li><li><button type="button"><span>〕</span></button></li><li><button type="button"><span>〈</span></button></li><li><button type="button"><span>〉</span></button></li><li><button type="button"><span>《</span></button></li><li><button type="button"><span>》</span></button></li><li><button type="button"><span>「</span></button></li><li><button type="button"><span>」</span></button></li><li><button type="button"><span>『</span></button></li><li><button type="button"><span>』</span></button></li><li><button type="button"><span>【</span></button></li><li><button type="button"><span>】</span></button></li><li><button type="button"><span>‘</span></button></li><li><button type="button"><span>’</span></button></li><li><button type="button"><span>“</span></button></li><li><button type="button"><span>”</span></button></li><li><button type="button"><span>、</span></button></li><li><button type="button"><span>。</span></button></li><li><button type="button"><span>·</span></button></li><li><button type="button"><span>‥</span></button></li><li><button type="button"><span>…</span></button></li><li><button type="button"><span>§</span></button></li><li><button type="button"><span>※</span></button></li><li><button type="button"><span>☆</span></button></li><li><button type="button"><span>★</span></button></li><li><button type="button"><span>○</span></button></li><li><button type="button"><span>●</span></button></li><li><button type="button"><span>◎</span></button></li><li><button type="button"><span>◇</span></button></li><li><button type="button"><span>◆</span></button></li><li><button type="button"><span>□</span></button></li><li><button type="button"><span>■</span></button></li><li><button type="button"><span>△</span></button></li><li><button type="button"><span>▲</span></button></li><li><button type="button"><span>▽</span></button></li><li><button type="button"><span>▼</span></button></li><li><button type="button"><span>◁</span></button></li><li><button type="button"><span>◀</span></button></li><li><button type="button"><span>▷</span></button></li><li><button type="button"><span>▶</span></button></li><li><button type="button"><span>♤</span></button></li><li><button type="button"><span>♠</span></button></li><li><button type="button"><span>♡</span></button></li><li><button type="button"><span>♥</span></button></li><li><button type="button"><span>♧</span></button></li><li><button type="button"><span>♣</span></button></li><li><button type="button"><span>⊙</span></button></li><li><button type="button"><span>◈</span></button></li><li><button type="button"><span>▣</span></button></li><li><button type="button"><span>◐</span></button></li><li><button type="button"><span>◑</span></button></li><li><button type="button"><span>▒</span></button></li><li><button type="button"><span>▤</span></button></li><li><button type="button"><span>▥</span></button></li><li><button type="button"><span>▨</span></button></li><li><button type="button"><span>▧</span></button></li><li><button type="button"><span>▦</span></button></li><li><button type="button"><span>▩</span></button></li><li><button type="button"><span>±</span></button></li><li><button type="button"><span>×</span></button></li><li><button type="button"><span>÷</span></button></li><li><button type="button"><span>≠</span></button></li><li><button type="button"><span>≤</span></button></li><li><button type="button"><span>≥</span></button></li><li><button type="button"><span>∞</span></button></li><li><button type="button"><span>∴</span></button></li><li><button type="button"><span>°</span></button></li><li><button type="button"><span>′</span></button></li><li><button type="button"><span>″</span></button></li><li><button type="button"><span>∠</span></button></li><li><button type="button"><span>⊥</span></button></li><li><button type="button"><span>⌒</span></button></li><li><button type="button"><span>∂</span></button></li><li><button type="button"><span>≡</span></button></li><li><button type="button"><span>≒</span></button></li><li><button type="button"><span>≪</span></button></li><li><button type="button"><span>≫</span></button></li><li><button type="button"><span>√</span></button></li><li><button type="button"><span>∽</span></button></li><li><button type="button"><span>∝</span></button></li><li><button type="button"><span>∵</span></button></li><li><button type="button"><span>∫</span></button></li><li><button type="button"><span>∬</span></button></li><li><button type="button"><span>∈</span></button></li><li><button type="button"><span>∋</span></button></li><li><button type="button"><span>⊆</span></button></li><li><button type="button"><span>⊇</span></button></li><li><button type="button"><span>⊂</span></button></li><li><button type="button"><span>⊃</span></button></li><li><button type="button"><span>∪</span></button></li><li><button type="button"><span>∩</span></button></li><li><button type="button"><span>∧</span></button></li><li><button type="button"><span>∨</span></button></li><li><button type="button"><span>￢</span></button></li><li><button type="button"><span>⇒</span></button></li><li><button type="button"><span>⇔</span></button></li><li><button type="button"><span>∀</span></button></li><li><button type="button"><span>∃</span></button></li><li><button type="button"><span>´</span></button></li><li><button type="button"><span>～</span></button></li><li><button type="button"><span>ˇ</span></button></li><li><button type="button"><span>˘</span></button></li><li><button type="button"><span>˝</span></button></li><li><button type="button"><span>˚</span></button></li><li><button type="button"><span>˙</span></button></li><li><button type="button"><span>¸</span></button></li><li><button type="button"><span>˛</span></button></li><li><button type="button"><span>¡</span></button></li><li><button type="button"><span>¿</span></button></li><li><button type="button"><span>ː</span></button></li><li><button type="button"><span>∮</span></button></li><li><button type="button"><span>∑</span></button></li><li><button type="button"><span>∏</span></button></li><li><button type="button"><span>♭</span></button></li><li><button type="button"><span>♩</span></button></li><li><button type="button"><span>♪</span></button></li><li><button type="button"><span>♬</span></button></li><li><button type="button"><span>㉿</span></button></li><li><button type="button"><span>→</span></button></li><li><button type="button"><span>←</span></button></li><li><button type="button"><span>↑</span></button></li><li><button type="button"><span>↓</span></button></li><li><button type="button"><span>↔</span></button></li><li><button type="button"><span>↕</span></button></li><li><button type="button"><span>↗</span></button></li><li><button type="button"><span>↙</span></button></li><li><button type="button"><span>↖</span></button></li><li><button type="button"><span>↘</span></button></li><li><button type="button"><span>㈜</span></button></li><li><button type="button"><span>№</span></button></li><li><button type="button"><span>㏇</span></button></li><li><button type="button"><span>™</span></button></li><li><button type="button"><span>㏂</span></button></li><li><button type="button"><span>㏘</span></button></li><li><button type="button"><span>℡</span></button></li><li><button type="button"><span>♨</span></button></li><li><button type="button"><span>☏</span></button></li><li><button type="button"><span>☎</span></button></li><li><button type="button"><span>☜</span></button></li><li><button type="button"><span>☞</span></button></li><li><button type="button"><span>¶</span></button></li><li><button type="button"><span>†</span></button></li><li><button type="button"><span>‡</span></button></li><li><button type="button"><span>®</span></button></li><li><button type="button"><span>ª</span></button></li><li><button type="button"><span>º</span></button></li><li><button type="button"><span>♂</span></button></li><li><button type="button"><span>♀</span></button></li> -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><button type="button" title="숫자와 단위" class="se2_char2"><span>숫자와 단위</span></button>
                                                        <div class="se2_s_character">
                                                            <ul class="husky_se2m_sCharacter_list">
                                                                <li></li>
                                                                <!-- 숫자와 단위 목록 -->
                                                                <!-- <li class="hover"><button type="button"><span>½</span></button></li><li><button type="button"><span>⅓</span></button></li><li><button type="button"><span>⅔</span></button></li><li><button type="button"><span>¼</span></button></li><li><button type="button"><span>¾</span></button></li><li><button type="button"><span>⅛</span></button></li><li><button type="button"><span>⅜</span></button></li><li><button type="button"><span>⅝</span></button></li><li><button type="button"><span>⅞</span></button></li><li><button type="button"><span>¹</span></button></li><li><button type="button"><span>²</span></button></li><li><button type="button"><span>³</span></button></li><li><button type="button"><span>⁴</span></button></li><li><button type="button"><span>ⁿ</span></button></li><li><button type="button"><span>₁</span></button></li><li><button type="button"><span>₂</span></button></li><li><button type="button"><span>₃</span></button></li><li><button type="button"><span>₄</span></button></li><li><button type="button"><span>Ⅰ</span></button></li><li><button type="button"><span>Ⅱ</span></button></li><li><button type="button"><span>Ⅲ</span></button></li><li><button type="button"><span>Ⅳ</span></button></li><li><button type="button"><span>Ⅴ</span></button></li><li><button type="button"><span>Ⅵ</span></button></li><li><button type="button"><span>Ⅶ</span></button></li><li><button type="button"><span>Ⅷ</span></button></li><li><button type="button"><span>Ⅸ</span></button></li><li><button type="button"><span>Ⅹ</span></button></li><li><button type="button"><span>ⅰ</span></button></li><li><button type="button"><span>ⅱ</span></button></li><li><button type="button"><span>ⅲ</span></button></li><li><button type="button"><span>ⅳ</span></button></li><li><button type="button"><span>ⅴ</span></button></li><li><button type="button"><span>ⅵ</span></button></li><li><button type="button"><span>ⅶ</span></button></li><li><button type="button"><span>ⅷ</span></button></li><li><button type="button"><span>ⅸ</span></button></li><li><button type="button"><span>ⅹ</span></button></li><li><button type="button"><span>￦</span></button></li><li><button type="button"><span>$</span></button></li><li><button type="button"><span>￥</span></button></li><li><button type="button"><span>￡</span></button></li><li><button type="button"><span>€</span></button></li><li><button type="button"><span>℃</span></button></li><li><button type="button"><span>A</span></button></li><li><button type="button"><span>℉</span></button></li><li><button type="button"><span>￠</span></button></li><li><button type="button"><span>¤</span></button></li><li><button type="button"><span>‰</span></button></li><li><button type="button"><span>㎕</span></button></li><li><button type="button"><span>㎖</span></button></li><li><button type="button"><span>㎗</span></button></li><li><button type="button"><span>ℓ</span></button></li><li><button type="button"><span>㎘</span></button></li><li><button type="button"><span>㏄</span></button></li><li><button type="button"><span>㎣</span></button></li><li><button type="button"><span>㎤</span></button></li><li><button type="button"><span>㎥</span></button></li><li><button type="button"><span>㎦</span></button></li><li><button type="button"><span>㎙</span></button></li><li><button type="button"><span>㎚</span></button></li><li><button type="button"><span>㎛</span></button></li><li><button type="button"><span>㎜</span></button></li><li><button type="button"><span>㎝</span></button></li><li><button type="button"><span>㎞</span></button></li><li><button type="button"><span>㎟</span></button></li><li><button type="button"><span>㎠</span></button></li><li><button type="button"><span>㎡</span></button></li><li><button type="button"><span>㎢</span></button></li><li><button type="button"><span>㏊</span></button></li><li><button type="button"><span>㎍</span></button></li><li><button type="button"><span>㎎</span></button></li><li><button type="button"><span>㎏</span></button></li><li><button type="button"><span>㏏</span></button></li><li><button type="button"><span>㎈</span></button></li><li><button type="button"><span>㎉</span></button></li><li><button type="button"><span>㏈</span></button></li><li><button type="button"><span>㎧</span></button></li><li><button type="button"><span>㎨</span></button></li><li><button type="button"><span>㎰</span></button></li><li><button type="button"><span>㎱</span></button></li><li><button type="button"><span>㎲</span></button></li><li><button type="button"><span>㎳</span></button></li><li><button type="button"><span>㎴</span></button></li><li><button type="button"><span>㎵</span></button></li><li><button type="button"><span>㎶</span></button></li><li><button type="button"><span>㎷</span></button></li><li><button type="button"><span>㎸</span></button></li><li><button type="button"><span>㎹</span></button></li><li><button type="button"><span>㎀</span></button></li><li><button type="button"><span>㎁</span></button></li><li><button type="button"><span>㎂</span></button></li><li><button type="button"><span>㎃</span></button></li><li><button type="button"><span>㎄</span></button></li><li><button type="button"><span>㎺</span></button></li><li><button type="button"><span>㎻</span></button></li><li><button type="button"><span>㎼</span></button></li><li><button type="button"><span>㎽</span></button></li><li><button type="button"><span>㎾</span></button></li><li><button type="button"><span>㎿</span></button></li><li><button type="button"><span>㎐</span></button></li><li><button type="button"><span>㎑</span></button></li><li><button type="button"><span>㎒</span></button></li><li><button type="button"><span>㎓</span></button></li><li><button type="button"><span>㎔</span></button></li><li><button type="button"><span>Ω</span></button></li><li><button type="button"><span>㏀</span></button></li><li><button type="button"><span>㏁</span></button></li><li><button type="button"><span>㎊</span></button></li><li><button type="button"><span>㎋</span></button></li><li><button type="button"><span>㎌</span></button></li><li><button type="button"><span>㏖</span></button></li><li><button type="button"><span>㏅</span></button></li><li><button type="button"><span>㎭</span></button></li><li><button type="button"><span>㎮</span></button></li><li><button type="button"><span>㎯</span></button></li><li><button type="button"><span>㏛</span></button></li><li><button type="button"><span>㎩</span></button></li><li><button type="button"><span>㎪</span></button></li><li><button type="button"><span>㎫</span></button></li><li><button type="button"><span>㎬</span></button></li><li><button type="button"><span>㏝</span></button></li><li><button type="button"><span>㏐</span></button></li><li><button type="button"><span>㏓</span></button></li><li><button type="button"><span>㏃</span></button></li><li><button type="button"><span>㏉</span></button></li><li><button type="button"><span>㏜</span></button></li><li><button type="button"><span>㏆</span></button></li> -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><button type="button" title="원,괄호" class="se2_char3"><span>원,괄호</span></button>
                                                        <div class="se2_s_character">
                                                            <ul class="husky_se2m_sCharacter_list">
                                                                <li></li>
                                                                <!-- 원,괄호 목록 -->
                                                                <!-- <li><button type="button"><span>㉠</span></button></li><li><button type="button"><span>㉡</span></button></li><li><button type="button"><span>㉢</span></button></li><li><button type="button"><span>㉣</span></button></li><li><button type="button"><span>㉤</span></button></li><li><button type="button"><span>㉥</span></button></li><li><button type="button"><span>㉦</span></button></li><li><button type="button"><span>㉧</span></button></li><li><button type="button"><span>㉨</span></button></li><li><button type="button"><span>㉩</span></button></li><li><button type="button"><span>㉪</span></button></li><li><button type="button"><span>㉫</span></button></li><li><button type="button"><span>㉬</span></button></li><li><button type="button"><span>㉭</span></button></li><li><button type="button"><span>㉮</span></button></li><li><button type="button"><span>㉯</span></button></li><li><button type="button"><span>㉰</span></button></li><li><button type="button"><span>㉱</span></button></li><li><button type="button"><span>㉲</span></button></li><li><button type="button"><span>㉳</span></button></li><li><button type="button"><span>㉴</span></button></li><li><button type="button"><span>㉵</span></button></li><li><button type="button"><span>㉶</span></button></li><li><button type="button"><span>㉷</span></button></li><li><button type="button"><span>㉸</span></button></li><li><button type="button"><span>㉹</span></button></li><li><button type="button"><span>㉺</span></button></li><li><button type="button"><span>㉻</span></button></li><li><button type="button"><span>ⓐ</span></button></li><li><button type="button"><span>ⓑ</span></button></li><li><button type="button"><span>ⓒ</span></button></li><li><button type="button"><span>ⓓ</span></button></li><li><button type="button"><span>ⓔ</span></button></li><li><button type="button"><span>ⓕ</span></button></li><li><button type="button"><span>ⓖ</span></button></li><li><button type="button"><span>ⓗ</span></button></li><li><button type="button"><span>ⓘ</span></button></li><li><button type="button"><span>ⓙ</span></button></li><li><button type="button"><span>ⓚ</span></button></li><li><button type="button"><span>ⓛ</span></button></li><li><button type="button"><span>ⓜ</span></button></li><li><button type="button"><span>ⓝ</span></button></li><li><button type="button"><span>ⓞ</span></button></li><li><button type="button"><span>ⓟ</span></button></li><li><button type="button"><span>ⓠ</span></button></li><li><button type="button"><span>ⓡ</span></button></li><li><button type="button"><span>ⓢ</span></button></li><li><button type="button"><span>ⓣ</span></button></li><li><button type="button"><span>ⓤ</span></button></li><li><button type="button"><span>ⓥ</span></button></li><li><button type="button"><span>ⓦ</span></button></li><li><button type="button"><span>ⓧ</span></button></li><li><button type="button"><span>ⓨ</span></button></li><li><button type="button"><span>ⓩ</span></button></li><li><button type="button"><span>①</span></button></li><li><button type="button"><span>②</span></button></li><li><button type="button"><span>③</span></button></li><li><button type="button"><span>④</span></button></li><li><button type="button"><span>⑤</span></button></li><li><button type="button"><span>⑥</span></button></li><li><button type="button"><span>⑦</span></button></li><li><button type="button"><span>⑧</span></button></li><li><button type="button"><span>⑨</span></button></li><li><button type="button"><span>⑩</span></button></li><li><button type="button"><span>⑪</span></button></li><li><button type="button"><span>⑫</span></button></li><li><button type="button"><span>⑬</span></button></li><li><button type="button"><span>⑭</span></button></li><li><button type="button"><span>⑮</span></button></li><li><button type="button"><span>㈀</span></button></li><li><button type="button"><span>㈁</span></button></li><li class="hover"><button type="button"><span>㈂</span></button></li><li><button type="button"><span>㈃</span></button></li><li><button type="button"><span>㈄</span></button></li><li><button type="button"><span>㈅</span></button></li><li><button type="button"><span>㈆</span></button></li><li><button type="button"><span>㈇</span></button></li><li><button type="button"><span>㈈</span></button></li><li><button type="button"><span>㈉</span></button></li><li><button type="button"><span>㈊</span></button></li><li><button type="button"><span>㈋</span></button></li><li><button type="button"><span>㈌</span></button></li><li><button type="button"><span>㈍</span></button></li><li><button type="button"><span>㈎</span></button></li><li><button type="button"><span>㈏</span></button></li><li><button type="button"><span>㈐</span></button></li><li><button type="button"><span>㈑</span></button></li><li><button type="button"><span>㈒</span></button></li><li><button type="button"><span>㈓</span></button></li><li><button type="button"><span>㈔</span></button></li><li><button type="button"><span>㈕</span></button></li><li><button type="button"><span>㈖</span></button></li><li><button type="button"><span>㈗</span></button></li><li><button type="button"><span>㈘</span></button></li><li><button type="button"><span>㈙</span></button></li><li><button type="button"><span>㈚</span></button></li><li><button type="button"><span>㈛</span></button></li><li><button type="button"><span>⒜</span></button></li><li><button type="button"><span>⒝</span></button></li><li><button type="button"><span>⒞</span></button></li><li><button type="button"><span>⒟</span></button></li><li><button type="button"><span>⒠</span></button></li><li><button type="button"><span>⒡</span></button></li><li><button type="button"><span>⒢</span></button></li><li><button type="button"><span>⒣</span></button></li><li><button type="button"><span>⒤</span></button></li><li><button type="button"><span>⒥</span></button></li><li><button type="button"><span>⒦</span></button></li><li><button type="button"><span>⒧</span></button></li><li><button type="button"><span>⒨</span></button></li><li><button type="button"><span>⒩</span></button></li><li><button type="button"><span>⒪</span></button></li><li><button type="button"><span>⒫</span></button></li><li><button type="button"><span>⒬</span></button></li><li><button type="button"><span>⒭</span></button></li><li><button type="button"><span>⒮</span></button></li><li><button type="button"><span>⒯</span></button></li><li><button type="button"><span>⒰</span></button></li><li><button type="button"><span>⒱</span></button></li><li><button type="button"><span>⒲</span></button></li><li><button type="button"><span>⒳</span></button></li><li><button type="button"><span>⒴</span></button></li><li><button type="button"><span>⒵</span></button></li><li><button type="button"><span>⑴</span></button></li><li><button type="button"><span>⑵</span></button></li><li><button type="button"><span>⑶</span></button></li><li><button type="button"><span>⑷</span></button></li><li><button type="button"><span>⑸</span></button></li><li><button type="button"><span>⑹</span></button></li><li><button type="button"><span>⑺</span></button></li><li><button type="button"><span>⑻</span></button></li><li><button type="button"><span>⑼</span></button></li><li><button type="button"><span>⑽</span></button></li><li><button type="button"><span>⑾</span></button></li><li><button type="button"><span>⑿</span></button></li><li><button type="button"><span>⒀</span></button></li><li><button type="button"><span>⒁</span></button></li><li><button type="button"><span>⒂</span></button></li> -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><button type="button" title="한글" class="se2_char4"><span>한글</span></button>
                                                        <div class="se2_s_character">
                                                            <ul class="husky_se2m_sCharacter_list">
                                                                <li></li>
                                                                <!-- 한글 목록 -->
                                                                <!-- <li><button type="button"><span>ㄱ</span></button></li><li><button type="button"><span>ㄲ</span></button></li><li><button type="button"><span>ㄳ</span></button></li><li><button type="button"><span>ㄴ</span></button></li><li><button type="button"><span>ㄵ</span></button></li><li><button type="button"><span>ㄶ</span></button></li><li><button type="button"><span>ㄷ</span></button></li><li><button type="button"><span>ㄸ</span></button></li><li><button type="button"><span>ㄹ</span></button></li><li><button type="button"><span>ㄺ</span></button></li><li><button type="button"><span>ㄻ</span></button></li><li><button type="button"><span>ㄼ</span></button></li><li><button type="button"><span>ㄽ</span></button></li><li><button type="button"><span>ㄾ</span></button></li><li><button type="button"><span>ㄿ</span></button></li><li><button type="button"><span>ㅀ</span></button></li><li><button type="button"><span>ㅁ</span></button></li><li><button type="button"><span>ㅂ</span></button></li><li><button type="button"><span>ㅃ</span></button></li><li><button type="button"><span>ㅄ</span></button></li><li><button type="button"><span>ㅅ</span></button></li><li><button type="button"><span>ㅆ</span></button></li><li><button type="button"><span>ㅇ</span></button></li><li><button type="button"><span>ㅈ</span></button></li><li><button type="button"><span>ㅉ</span></button></li><li><button type="button"><span>ㅊ</span></button></li><li><button type="button"><span>ㅋ</span></button></li><li><button type="button"><span>ㅌ</span></button></li><li><button type="button"><span>ㅍ</span></button></li><li><button type="button"><span>ㅎ</span></button></li><li><button type="button"><span>ㅏ</span></button></li><li><button type="button"><span>ㅐ</span></button></li><li><button type="button"><span>ㅑ</span></button></li><li><button type="button"><span>ㅒ</span></button></li><li><button type="button"><span>ㅓ</span></button></li><li><button type="button"><span>ㅔ</span></button></li><li><button type="button"><span>ㅕ</span></button></li><li><button type="button"><span>ㅖ</span></button></li><li><button type="button"><span>ㅗ</span></button></li><li><button type="button"><span>ㅘ</span></button></li><li><button type="button"><span>ㅙ</span></button></li><li><button type="button"><span>ㅚ</span></button></li><li><button type="button"><span>ㅛ</span></button></li><li><button type="button"><span>ㅜ</span></button></li><li><button type="button"><span>ㅝ</span></button></li><li><button type="button"><span>ㅞ</span></button></li><li><button type="button"><span>ㅟ</span></button></li><li><button type="button"><span>ㅠ</span></button></li><li><button type="button"><span>ㅡ</span></button></li><li><button type="button"><span>ㅢ</span></button></li><li><button type="button"><span>ㅣ</span></button></li><li><button type="button"><span>ㅥ</span></button></li><li><button type="button"><span>ㅦ</span></button></li><li><button type="button"><span>ㅧ</span></button></li><li><button type="button"><span>ㅨ</span></button></li><li><button type="button"><span>ㅩ</span></button></li><li><button type="button"><span>ㅪ</span></button></li><li><button type="button"><span>ㅫ</span></button></li><li><button type="button"><span>ㅬ</span></button></li><li><button type="button"><span>ㅭ</span></button></li><li><button type="button"><span>ㅮ</span></button></li><li><button type="button"><span>ㅯ</span></button></li><li><button type="button"><span>ㅰ</span></button></li><li><button type="button"><span>ㅱ</span></button></li><li><button type="button"><span>ㅲ</span></button></li><li><button type="button"><span>ㅳ</span></button></li><li><button type="button"><span>ㅴ</span></button></li><li><button type="button"><span>ㅵ</span></button></li><li><button type="button"><span>ㅶ</span></button></li><li><button type="button"><span>ㅷ</span></button></li><li><button type="button"><span>ㅸ</span></button></li><li><button type="button"><span>ㅹ</span></button></li><li><button type="button"><span>ㅺ</span></button></li><li><button type="button"><span>ㅻ</span></button></li><li><button type="button"><span>ㅼ</span></button></li><li><button type="button"><span>ㅽ</span></button></li><li><button type="button"><span>ㅾ</span></button></li><li><button type="button"><span>ㅿ</span></button></li><li><button type="button"><span>ㆀ</span></button></li><li><button type="button"><span>ㆁ</span></button></li><li><button type="button"><span>ㆂ</span></button></li><li><button type="button"><span>ㆃ</span></button></li><li><button type="button"><span>ㆄ</span></button></li><li><button type="button"><span>ㆅ</span></button></li><li><button type="button"><span>ㆆ</span></button></li><li><button type="button"><span>ㆇ</span></button></li><li><button type="button"><span>ㆈ</span></button></li><li><button type="button"><span>ㆉ</span></button></li><li><button type="button"><span>ㆊ</span></button></li><li><button type="button"><span>ㆋ</span></button></li><li><button type="button"><span>ㆌ</span></button></li><li><button type="button"><span>ㆍ</span></button></li><li><button type="button"><span>ㆎ</span></button></li> -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><button type="button" title="그리스,라틴어" class="se2_char5"><span>그리스,라틴어</span></button>
                                                        <div class="se2_s_character">
                                                            <ul class="husky_se2m_sCharacter_list">
                                                                <li></li>
                                                                <!-- 그리스,라틴어 목록 -->
                                                                <!-- <li><button type="button"><span>Α</span></button></li><li><button type="button"><span>Β</span></button></li><li><button type="button"><span>Γ</span></button></li><li><button type="button"><span>Δ</span></button></li><li><button type="button"><span>Ε</span></button></li><li><button type="button"><span>Ζ</span></button></li><li><button type="button"><span>Η</span></button></li><li><button type="button"><span>Θ</span></button></li><li><button type="button"><span>Ι</span></button></li><li><button type="button"><span>Κ</span></button></li><li><button type="button"><span>Λ</span></button></li><li><button type="button"><span>Μ</span></button></li><li><button type="button"><span>Ν</span></button></li><li><button type="button"><span>Ξ</span></button></li><li class="hover"><button type="button"><span>Ο</span></button></li><li><button type="button"><span>Π</span></button></li><li><button type="button"><span>Ρ</span></button></li><li><button type="button"><span>Σ</span></button></li><li><button type="button"><span>Τ</span></button></li><li><button type="button"><span>Υ</span></button></li><li><button type="button"><span>Φ</span></button></li><li><button type="button"><span>Χ</span></button></li><li><button type="button"><span>Ψ</span></button></li><li><button type="button"><span>Ω</span></button></li><li><button type="button"><span>α</span></button></li><li><button type="button"><span>β</span></button></li><li><button type="button"><span>γ</span></button></li><li><button type="button"><span>δ</span></button></li><li><button type="button"><span>ε</span></button></li><li><button type="button"><span>ζ</span></button></li><li><button type="button"><span>η</span></button></li><li><button type="button"><span>θ</span></button></li><li><button type="button"><span>ι</span></button></li><li><button type="button"><span>κ</span></button></li><li><button type="button"><span>λ</span></button></li><li><button type="button"><span>μ</span></button></li><li><button type="button"><span>ν</span></button></li><li><button type="button"><span>ξ</span></button></li><li><button type="button"><span>ο</span></button></li><li><button type="button"><span>π</span></button></li><li><button type="button"><span>ρ</span></button></li><li><button type="button"><span>σ</span></button></li><li><button type="button"><span>τ</span></button></li><li><button type="button"><span>υ</span></button></li><li><button type="button"><span>φ</span></button></li><li><button type="button"><span>χ</span></button></li><li><button type="button"><span>ψ</span></button></li><li><button type="button"><span>ω</span></button></li><li><button type="button"><span>Æ</span></button></li><li><button type="button"><span>Ð</span></button></li><li><button type="button"><span>Ħ</span></button></li><li><button type="button"><span>Ĳ</span></button></li><li><button type="button"><span>Ŀ</span></button></li><li><button type="button"><span>Ł</span></button></li><li><button type="button"><span>Ø</span></button></li><li><button type="button"><span>Œ</span></button></li><li><button type="button"><span>Þ</span></button></li><li><button type="button"><span>Ŧ</span></button></li><li><button type="button"><span>Ŋ</span></button></li><li><button type="button"><span>æ</span></button></li><li><button type="button"><span>đ</span></button></li><li><button type="button"><span>ð</span></button></li><li><button type="button"><span>ħ</span></button></li><li><button type="button"><span>I</span></button></li><li><button type="button"><span>ĳ</span></button></li><li><button type="button"><span>ĸ</span></button></li><li><button type="button"><span>ŀ</span></button></li><li><button type="button"><span>ł</span></button></li><li><button type="button"><span>ł</span></button></li><li><button type="button"><span>œ</span></button></li><li><button type="button"><span>ß</span></button></li><li><button type="button"><span>þ</span></button></li><li><button type="button"><span>ŧ</span></button></li><li><button type="button"><span>ŋ</span></button></li><li><button type="button"><span>ŉ</span></button></li><li><button type="button"><span>Б</span></button></li><li><button type="button"><span>Г</span></button></li><li><button type="button"><span>Д</span></button></li><li><button type="button"><span>Ё</span></button></li><li><button type="button"><span>Ж</span></button></li><li><button type="button"><span>З</span></button></li><li><button type="button"><span>И</span></button></li><li><button type="button"><span>Й</span></button></li><li><button type="button"><span>Л</span></button></li><li><button type="button"><span>П</span></button></li><li><button type="button"><span>Ц</span></button></li><li><button type="button"><span>Ч</span></button></li><li><button type="button"><span>Ш</span></button></li><li><button type="button"><span>Щ</span></button></li><li><button type="button"><span>Ъ</span></button></li><li><button type="button"><span>Ы</span></button></li><li><button type="button"><span>Ь</span></button></li><li><button type="button"><span>Э</span></button></li><li><button type="button"><span>Ю</span></button></li><li><button type="button"><span>Я</span></button></li><li><button type="button"><span>б</span></button></li><li><button type="button"><span>в</span></button></li><li><button type="button"><span>г</span></button></li><li><button type="button"><span>д</span></button></li><li><button type="button"><span>ё</span></button></li><li><button type="button"><span>ж</span></button></li><li><button type="button"><span>з</span></button></li><li><button type="button"><span>и</span></button></li><li><button type="button"><span>й</span></button></li><li><button type="button"><span>л</span></button></li><li><button type="button"><span>п</span></button></li><li><button type="button"><span>ф</span></button></li><li><button type="button"><span>ц</span></button></li><li><button type="button"><span>ч</span></button></li><li><button type="button"><span>ш</span></button></li><li><button type="button"><span>щ</span></button></li><li><button type="button"><span>ъ</span></button></li><li><button type="button"><span>ы</span></button></li><li><button type="button"><span>ь</span></button></li><li><button type="button"><span>э</span></button></li><li><button type="button"><span>ю</span></button></li><li><button type="button"><span>я</span></button></li> -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><button type="button" title="일본어" class="se2_char6"><span>일본어</span></button>
                                                        <div class="se2_s_character">
                                                            <ul class="husky_se2m_sCharacter_list">
                                                                <li></li>
                                                                <!-- 일본어 목록 -->
                                                                <!-- <li><button type="button"><span>ぁ</span></button></li><li class="hover"><button type="button"><span>あ</span></button></li><li><button type="button"><span>ぃ</span></button></li><li><button type="button"><span>い</span></button></li><li><button type="button"><span>ぅ</span></button></li><li><button type="button"><span>う</span></button></li><li><button type="button"><span>ぇ</span></button></li><li><button type="button"><span>え</span></button></li><li><button type="button"><span>ぉ</span></button></li><li><button type="button"><span>お</span></button></li><li><button type="button"><span>か</span></button></li><li><button type="button"><span>が</span></button></li><li><button type="button"><span>き</span></button></li><li><button type="button"><span>ぎ</span></button></li><li><button type="button"><span>く</span></button></li><li><button type="button"><span>ぐ</span></button></li><li><button type="button"><span>け</span></button></li><li><button type="button"><span>げ</span></button></li><li><button type="button"><span>こ</span></button></li><li><button type="button"><span>ご</span></button></li><li><button type="button"><span>さ</span></button></li><li><button type="button"><span>ざ</span></button></li><li><button type="button"><span>し</span></button></li><li><button type="button"><span>じ</span></button></li><li><button type="button"><span>す</span></button></li><li><button type="button"><span>ず</span></button></li><li><button type="button"><span>せ</span></button></li><li><button type="button"><span>ぜ</span></button></li><li><button type="button"><span>そ</span></button></li><li><button type="button"><span>ぞ</span></button></li><li><button type="button"><span>た</span></button></li><li><button type="button"><span>だ</span></button></li><li><button type="button"><span>ち</span></button></li><li><button type="button"><span>ぢ</span></button></li><li><button type="button"><span>っ</span></button></li><li><button type="button"><span>つ</span></button></li><li><button type="button"><span>づ</span></button></li><li><button type="button"><span>て</span></button></li><li><button type="button"><span>で</span></button></li><li><button type="button"><span>と</span></button></li><li><button type="button"><span>ど</span></button></li><li><button type="button"><span>な</span></button></li><li><button type="button"><span>に</span></button></li><li><button type="button"><span>ぬ</span></button></li><li><button type="button"><span>ね</span></button></li><li><button type="button"><span>の</span></button></li><li><button type="button"><span>は</span></button></li><li><button type="button"><span>ば</span></button></li><li><button type="button"><span>ぱ</span></button></li><li><button type="button"><span>ひ</span></button></li><li><button type="button"><span>び</span></button></li><li><button type="button"><span>ぴ</span></button></li><li><button type="button"><span>ふ</span></button></li><li><button type="button"><span>ぶ</span></button></li><li><button type="button"><span>ぷ</span></button></li><li><button type="button"><span>へ</span></button></li><li><button type="button"><span>べ</span></button></li><li><button type="button"><span>ぺ</span></button></li><li><button type="button"><span>ほ</span></button></li><li><button type="button"><span>ぼ</span></button></li><li><button type="button"><span>ぽ</span></button></li><li><button type="button"><span>ま</span></button></li><li><button type="button"><span>み</span></button></li><li><button type="button"><span>む</span></button></li><li><button type="button"><span>め</span></button></li><li><button type="button"><span>も</span></button></li><li><button type="button"><span>ゃ</span></button></li><li><button type="button"><span>や</span></button></li><li><button type="button"><span>ゅ</span></button></li><li><button type="button"><span>ゆ</span></button></li><li><button type="button"><span>ょ</span></button></li><li><button type="button"><span>よ</span></button></li><li><button type="button"><span>ら</span></button></li><li><button type="button"><span>り</span></button></li><li><button type="button"><span>る</span></button></li><li><button type="button"><span>れ</span></button></li><li><button type="button"><span>ろ</span></button></li><li><button type="button"><span>ゎ</span></button></li><li><button type="button"><span>わ</span></button></li><li><button type="button"><span>ゐ</span></button></li><li><button type="button"><span>ゑ</span></button></li><li><button type="button"><span>を</span></button></li><li><button type="button"><span>ん</span></button></li><li><button type="button"><span>ァ</span></button></li><li><button type="button"><span>ア</span></button></li><li><button type="button"><span>ィ</span></button></li><li><button type="button"><span>イ</span></button></li><li><button type="button"><span>ゥ</span></button></li><li><button type="button"><span>ウ</span></button></li><li><button type="button"><span>ェ</span></button></li><li><button type="button"><span>エ</span></button></li><li><button type="button"><span>ォ</span></button></li><li><button type="button"><span>オ</span></button></li><li><button type="button"><span>カ</span></button></li><li><button type="button"><span>ガ</span></button></li><li><button type="button"><span>キ</span></button></li><li><button type="button"><span>ギ</span></button></li><li><button type="button"><span>ク</span></button></li><li><button type="button"><span>グ</span></button></li><li><button type="button"><span>ケ</span></button></li><li><button type="button"><span>ゲ</span></button></li><li><button type="button"><span>コ</span></button></li><li><button type="button"><span>ゴ</span></button></li><li><button type="button"><span>サ</span></button></li><li><button type="button"><span>ザ</span></button></li><li><button type="button"><span>シ</span></button></li><li><button type="button"><span>ジ</span></button></li><li><button type="button"><span>ス</span></button></li><li><button type="button"><span>ズ</span></button></li><li><button type="button"><span>セ</span></button></li><li><button type="button"><span>ゼ</span></button></li><li><button type="button"><span>ソ</span></button></li><li><button type="button"><span>ゾ</span></button></li><li><button type="button"><span>タ</span></button></li><li><button type="button"><span>ダ</span></button></li><li><button type="button"><span>チ</span></button></li><li><button type="button"><span>ヂ</span></button></li><li><button type="button"><span>ッ</span></button></li><li><button type="button"><span>ツ</span></button></li><li><button type="button"><span>ヅ</span></button></li><li><button type="button"><span>テ</span></button></li><li><button type="button"><span>デ</span></button></li><li><button type="button"><span>ト</span></button></li><li><button type="button"><span>ド</span></button></li><li><button type="button"><span>ナ</span></button></li><li><button type="button"><span>ニ</span></button></li><li><button type="button"><span>ヌ</span></button></li><li><button type="button"><span>ネ</span></button></li><li><button type="button"><span>ノ</span></button></li><li><button type="button"><span>ハ</span></button></li><li><button type="button"><span>バ</span></button></li><li><button type="button"><span>パ</span></button></li><li><button type="button"><span>ヒ</span></button></li><li><button type="button"><span>ビ</span></button></li><li><button type="button"><span>ピ</span></button></li><li><button type="button"><span>フ</span></button></li><li><button type="button"><span>ブ</span></button></li><li><button type="button"><span>プ</span></button></li><li><button type="button"><span>ヘ</span></button></li><li><button type="button"><span>ベ</span></button></li><li><button type="button"><span>ペ</span></button></li><li><button type="button"><span>ホ</span></button></li><li><button type="button"><span>ボ</span></button></li><li><button type="button"><span>ポ</span></button></li><li><button type="button"><span>マ</span></button></li><li><button type="button"><span>ミ</span></button></li><li><button type="button"><span>ム</span></button></li><li><button type="button"><span>メ</span></button></li><li><button type="button"><span>モ</span></button></li><li><button type="button"><span>ャ</span></button></li><li><button type="button"><span>ヤ</span></button></li><li><button type="button"><span>ュ</span></button></li><li><button type="button"><span>ユ</span></button></li><li><button type="button"><span>ョ</span></button></li><li><button type="button"><span>ヨ</span></button></li><li><button type="button"><span>ラ</span></button></li><li><button type="button"><span>リ</span></button></li><li><button type="button"><span>ル</span></button></li><li><button type="button"><span>レ</span></button></li><li><button type="button"><span>ロ</span></button></li><li><button type="button"><span>ヮ</span></button></li><li><button type="button"><span>ワ</span></button></li><li><button type="button"><span>ヰ</span></button></li><li><button type="button"><span>ヱ</span></button></li><li><button type="button"><span>ヲ</span></button></li><li><button type="button"><span>ン</span></button></li><li><button type="button"><span>ヴ</span></button></li><li><button type="button"><span>ヵ</span></button></li><li><button type="button"><span>ヶ</span></button></li> -->
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p class="se2_apply_character">
                                                    <label for="char_preview">선택한 기호</label> <input type="text" name="char_preview" id="char_preview" value="®º⊆●○" class="input_ty1"><button type="button" class="se2_confirm"><span>적용</span></button><button type="button" class="se2_cancel husky_se2m_sCharacter_close"><span>취소</span></button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //특수기호 -->
                                </li>
                                <li class="husky_seditor_ui_table"><button type="button" title="표" class="se2_table"><i class="fa fa-table" aria-hidden="true"></i><!--<img src="images/icon/icon_table.png">--><span class="_buttonRound">표</span><i class="fa fa-angle-down" aria-hidden="true"></i></button>
                                    <!--@lazyload_html create_table-->
                                    <!-- 표 -->
                                    <div class="se2_layer husky_se2m_table_layer" style="margin-left:-171px">
                                        <div class="se2_in_layer">
                                            <div class="se2_table_set">
                                                <fieldset>
                                                    <legend>칸수 지정</legend>
                                                    <dl class="se2_cell_num">
                                                        <dt><label for="row">행</label></dt>
                                                        <dd><input id="row" name="" type="text" maxlength="2" value="4" class="input_ty2">
                                                            <button type="button" class="se2_add"><span>1행추가</span></button>
                                                            <button type="button" class="se2_del"><span>1행삭제</span></button>
                                                        </dd>
                                                        <dt><label for="col">열</label></dt>
                                                        <dd><input id="col" name="" type="text" maxlength="2" value="4" class="input_ty2">
                                                            <button type="button" class="se2_add"><span>1열추가</span></button>
                                                            <button type="button" class="se2_del"><span>1열삭제</span></button>
                                                        </dd>
                                                    </dl>
                                                    <table border="0" cellspacing="1" class="se2_pre_table husky_se2m_table_preview">
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                            <td>&nbsp;</td>
                                                        </tr>
                                                    </table>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>속성직접입력</legend>
                                                    <dl class="se2_t_proper1">
                                                        <dt><input type="radio" id="se2_tbp1" name="se2_tbp" checked><label for="se2_tbp1">속성직접입력</label></dt>
                                                        <dd>
                                                            <dl class="se2_t_proper1_1">
                                                                <dt><label>표스타일</label></dt>
                                                                <dd><div class="se2_select_ty1"><span class="se2_b_style3 husky_se2m_table_border_style_preview"></span><button type="button" title="더보기" class="se2_view_more"><span>더보기</span></button></div>
                                                                    <!-- 레이어 : 테두리스타일 -->
                                                                    <div class="se2_layer_b_style husky_se2m_table_border_style_layer" style="display:none">
                                                                        <ul>
                                                                            <li><button type="button" class="se2_b_style1"><span class="se2m_no_border">테두리없음</span></button></li>
                                                                            <li><button type="button" class="se2_b_style2"><span><span>테두리스타일2</span></span></button></li>
                                                                            <li><button type="button" class="se2_b_style3"><span><span>테두리스타일3</span></span></button></li>
                                                                            <li><button type="button" class="se2_b_style4"><span><span>테두리스타일4</span></span></button></li>
                                                                            <li><button type="button" class="se2_b_style5"><span><span>테두리스타일5</span></span></button></li>
                                                                            <li><button type="button" class="se2_b_style6"><span><span>테두리스타일6</span></span></button></li>
                                                                            <li><button type="button" class="se2_b_style7"><span><span>테두리스타일7</span></span></button></li>
                                                                        </ul>
                                                                    </div>
                                                                    <!-- //레이어 : 테두리스타일 -->
                                                                </dd>
                                                            </dl>
                                                            <dl class="se2_t_proper1_1 se2_t_proper1_2">
                                                                <dt><label for="se2_b_width">테두리두께</label></dt>
                                                                <dd><input id="se2_b_width" name="" type="text" maxlength="2" value="1" class="input_ty1">
                                                                    <button type="button" title="1px 더하기" class="se2_add se2m_incBorder"><span>1px 더하기</span></button>
                                                                    <button type="button" title="1px 빼기" class="se2_del se2m_decBorder"><span>1px 빼기</span></button>
                                                                </dd>
                                                            </dl>
                                                            <dl class="se2_t_proper1_1 se2_t_proper1_3">
                                                                <dt><label for="se2_b_color">테두리색</label></dt>
                                                                <dd><input id="se2_b_color" name="" type="text" maxlength="7" value="#cccccc" class="input_ty3"><span class="se2_pre_color"><button type="button" style="background:#cccccc;"><span>색찾기</span></button></span>
                                                                    <!-- 레이어 : 테두리색 -->
                                                                    <div class="se2_layer se2_b_t_b1" style="clear:both;display:none;position:absolute;top:20px;left:-147px;">
                                                                        <div class="se2_in_layer husky_se2m_table_border_color_pallet">
                                                                        </div>
                                                                    </div>
                                                                    <!-- //레이어 : 테두리색-->
                                                                </dd>
                                                            </dl>
                                                            <div class="se2_t_dim0"></div><!-- 테두리 없음일때 딤드레이어 -->
                                                            <dl class="se2_t_proper1_1 se2_t_proper1_4">
                                                                <dt><label for="se2_cellbg">셀 배경색</label></dt>
                                                                <dd><input id="se2_cellbg" name="" type="text" maxlength="7" value="#ffffff" class="input_ty3"><span class="se2_pre_color"><button type="button" style="background:#ffffff;"><span>색찾기</span></button></span>
                                                                    <!-- 레이어 : 셀배경색 -->
                                                                    <div class="se2_layer se2_b_t_b1" style="clear:both;display:none;position:absolute;top:20px;left:-147px;">
                                                                        <div class="se2_in_layer husky_se2m_table_bgcolor_pallet">
                                                                        </div>
                                                                    </div>
                                                                    <!-- //레이어 : 셀배경색-->
                                                                </dd>
                                                            </dl>
                                                        </dd>
                                                    </dl>
                                                </fieldset>
                                                <fieldset>
                                                    <legend>표스타일</legend>
                                                    <dl class="se2_t_proper2">
                                                        <dt><input type="radio" id="se2_tbp2" name="se2_tbp"><label for="se2_tbp2">스타일 선택</label></dt>
                                                        <dd><div class="se2_select_ty2"><span class="se2_t_style1 husky_se2m_table_style_preview"></span><button type="button" title="더보기" class="se2_view_more"><span>더보기</span></button></div>
                                                            <!-- 레이어 : 표템플릿선택 -->
                                                            <div class="se2_layer_t_style husky_se2m_table_style_layer" style="display:none">
                                                                <ul class="se2_scroll">
                                                                    <li><button type="button" class="se2_t_style1"><span>표스타일1</span></button></li>
                                                                    <li><button type="button" class="se2_t_style2"><span>표스타일2</span></button></li>
                                                                    <li><button type="button" class="se2_t_style3"><span>표스타일3</span></button></li>
                                                                    <li><button type="button" class="se2_t_style4"><span>표스타일4</span></button></li>
                                                                    <li><button type="button" class="se2_t_style5"><span>표스타일5</span></button></li>
                                                                    <li><button type="button" class="se2_t_style6"><span>표스타일6</span></button></li>
                                                                    <li><button type="button" class="se2_t_style7"><span>표스타일7</span></button></li>
                                                                    <li><button type="button" class="se2_t_style8"><span>표스타일8</span></button></li>
                                                                    <li><button type="button" class="se2_t_style9"><span>표스타일9</span></button></li>
                                                                    <li><button type="button" class="se2_t_style10"><span>표스타일10</span></button></li>
                                                                    <li><button type="button" class="se2_t_style11"><span>표스타일11</span></button></li>
                                                                    <li><button type="button" class="se2_t_style12"><span>표스타일12</span></button></li>
                                                                    <li><button type="button" class="se2_t_style13"><span>표스타일13</span></button></li>
                                                                    <li><button type="button" class="se2_t_style14"><span>표스타일14</span></button></li>
                                                                    <li><button type="button" class="se2_t_style15"><span>표스타일15</span></button></li>
                                                                    <li><button type="button" class="se2_t_style16"><span>표스타일16</span></button></li>
                                                                </ul>
                                                            </div>
                                                            <!-- //레이어 : 표템플릿선택 -->
                                                        </dd>
                                                    </dl>
                                                </fieldset>
                                                <p class="se2_btn_area">
                                                    <button type="button" class="se2_apply"><span>적용</span><div>적용</div></button><button type="button" class="se2_cancel"><span>취소</span><div>취소</div></button>
                                                </p>
                                                <!-- 딤드레이어 -->
                                                <div class="se2_t_dim3"></div>
                                                <!-- //딤드레이어 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //표 -->
                                    <!--//@lazyload_html-->
                                </li>
                                <li class="husky_seditor_ui_findAndReplace last_child"  style="display:none"><button type="button" title="찾기/바꾸기" class="se2_find"><span class="_buttonRound tool_bg">찾기/바꾸기</span></button>
                                    <!--@lazyload_html find_and_replace-->
                                    <!-- 찾기/바꾸기 -->
                                    <div class="se2_layer husky_se2m_findAndReplace_layer" style="margin-left:-238px;">
                                        <div class="se2_in_layer">
                                            <div class="se2_bx_find_revise">
                                                <button type="button" title="닫기" class="se2_close husky_se2m_cancel"><span>닫기</span></button>
                                                <h3>찾기/바꾸기</h3>
                                                <ul>
                                                    <li class="active"><button type="button" class="se2_tabfind"><span>찾기</span></button></li>
                                                    <li><button type="button" class="se2_tabrevise"><span>바꾸기</span></button></li>
                                                </ul>
                                                <div class="se2_in_bx_find husky_se2m_find_ui" style="display:block">
                                                    <dl>
                                                        <dt><label for="find_word">찾을 단어</label></dt><dd><input type="text" id="find_word" value="스마트에디터" class="input_ty1"></dd>
                                                    </dl>
                                                    <p class="se2_find_btns">
                                                        <button type="button" class="se2_find_next husky_se2m_find_next"><span>다음 찾기</span></button><button type="button" class="se2_cancel husky_se2m_cancel"><span>취소</span></button>
                                                    </p>
                                                </div>
                                                <div class="se2_in_bx_revise husky_se2m_replace_ui" style="display:none">
                                                    <dl>
                                                        <dt><label for="find_word2">찾을 단어</label></dt><dd><input type="text" id="find_word2" value="스마트에디터" class="input_ty1"></dd>
                                                        <dt><label for="revise_word">바꿀 단어</label></dt><dd><input type="text" id="revise_word" value="스마트에디터" class="input_ty1"></dd>
                                                    </dl>
                                                    <p class="se2_find_btns">
                                                        <button type="button" class="se2_find_next2 husky_se2m_replace_find_next"><span>다음 찾기</span></button><button type="button" class="se2_revise1 husky_se2m_replace"><span>바꾸기</span></button><button type="button" class="se2_revise2 husky_se2m_replace_all"><span>모두 바꾸기</span></button><button type="button" class="se2_cancel husky_se2m_cancel"><span>취소</span></button>
                                                    </p>
                                                </div>
                                                <button type="button" title="닫기" class="se2_close husky_se2m_cancel"><span>닫기</span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- //찾기/바꾸기 -->
                                    <!--//@lazyload_html-->
                                </li>
                                <li class="husky_seditor_ui_image"  style="display:none"><button tyle="button" title="이미지" class="se2_image"><!--<i class="fa fa-picture-o" aria-hidden="true"></i>--><img src="images/icon/icon_images.png" style="hieight:26px;"><span class="_buttonRound">이미지</span></button></li>


                            </ul>
                        </div>
                        <!-- //704이상 -->
                    </div>
                    <!-- 접근성 도움말 레이어 -->
                    <div class="se2_layer se2_accessibility" style="display:none;">
                        <div class="se2_in_layer">
                            <button type="button" title="닫기" class="se2_close"><span>닫기</span></button>
                            <h3><strong>접근성 도움말</strong></h3>
                            <div class="box_help">
                                <div>
                                    <strong>툴바</strong>
                                    <p>ALT+F10 을 누르면 툴바로 이동합니다. 다음 버튼은 TAB 으로 이전 버튼은 SHIFT+TAB 으로 이동 가능합니다. ENTER 를 누르면 해당 버튼의 기능이 동작하고 글쓰기 영역으로 포커스가 이동합니다. ESC 를 누르면 아무런 기능을 실행하지 않고 글쓰기 영역으로 포커스가 이동합니다.</p>
                                    <strong>빠져 나가기</strong>
                                    <p>ALT+. 를 누르면 스마트 에디터 다음 요소로 ALT+, 를 누르면 스마트에디터 이전 요소로 빠져나갈 수 있습니다.</p>
                                    <strong>명령어 단축키</strong>
                                    <ul>
                                        <li>CTRL+B <span>굵게</span></li>
                                        <li>SHIFT+TAB <span>내어쓰기</span></li>
                                        <li>CTRL+U <span>밑줄</span></li>
                                        <li>CTRL+F <span>찾기</span></li>
                                        <li>CTRL+I <span>기울임 글꼴</span></li>
                                        <li>CTRL+H <span>바꾸기</span></li>
                                        <li>CTRL+D <span>취소선</span></li>
                                        <li>CTRL+K <span>링크걸기</span></li>
                                        <li>TAB <span>들여쓰기</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="se2_btns">
                                <button type="button" class="se2_close2"><span>닫기</span></button>
                            </div>
                        </div>
                    </div>
                    <!-- //접근성 도움말 레이어 -->
                    <!-- 입력 -->
                    <div class="se2_input_area husky_seditor_editing_area_container">
                        <iframe src="about:blank" id="se2_iframe" name="se2_iframe" class="se2_input_wysiwyg" width="400" height="300" title="글쓰기 영역 : 도구 모음은 ALT+F10을, 도움말은 ALT+0을 누르세요." frameborder="0" style="display:block;"></iframe>
                        <textarea name="" rows="10" cols="100" title="HTML 편집 모드" class="se2_input_syntax se2_input_htmlsrc" style="display:none;outline-style:none;resize:none"> </textarea>
                        <textarea name="" rows="10" cols="100" title="TEXT 편집 모드" class="se2_input_syntax se2_input_text" style="display:none;outline-style:none;resize:none;"> </textarea>

                        <!-- 입력창 조절 안내 레이어 -->
                        <!--<div class="ly_controller husky_seditor_resize_notice" style="z-index:20;display:none;">
                            <p>아래 영역을 드래그하여 입력창 크기를 조절할 수 있습니다.</p>
                            <button type="button" title="닫기" class="bt_clse"><span>닫기</span></button>
                            <span class="ic_arr"></span>
                        </div>-->
                        <!-- //입력창 조절 안내 레이어 -->
                        <div class="quick_wrap">
                            <!-- 표/글양식 간단편집기 -->
                            <!--@lazyload_html qe_table-->
                            <div class="q_table_wrap" style="z-index: 150;">
                                <button class="_fold se2_qmax q_open_table_full" style="position:absolute; display:none;top:340px;left:210px;z-index:30;" title="최대화" type="button"><span>퀵에디터최대화</span></button>
                                <div class="_full se2_qeditor se2_table_set" style="position:absolute;display:none;top:135px;left:661px;z-index:30;">
                                    <div class="se2_qbar q_dragable"><span class="se2_qmini"><button title="최소화" class="q_open_table_fold"><span>퀵에디터최소화</span></button></span></div>
                                    <div class="se2_qbody0">
                                        <div class="se2_qbody">
                                            <dl class="se2_qe1">
                                                <dt>삽입</dt><dd><button class="se2_addrow" title="행삽입" type="button"><span>행삽입</span></button><button class="se2_addcol" title="열삽입" type="button"><span>열삽입</span></button></dd>
                                                <dt>분할</dt><dd><button class="se2_seprow" title="행분할" type="button"><span>행분할</span></button><button class="se2_sepcol" title="열분할" type="button"><span>열분할</span></button></dd>

                                                <dt>삭제</dt><dd><button class="se2_delrow" title="행삭제" type="button"><span>행삭제</span></button><button class="se2_delcol" title="열삭제" type="button"><span>열삭제</span></button></dd>
                                                <dt>병합</dt><dd><button class="se2_merrow" title="행병합" type="button"><span>행병합</span></button></dd>
                                            </dl>
                                            <div class="se2_qe2 se2_qe2_3"> <!-- 테이블 퀵에디터의 경우만,  se2_qe2_3제거 -->
                                                <!-- 샐배경색 -->
                                                <dl class="se2_qe2_1">

                                                    <dt><input type="radio" checked="checked" name="se2_tbp3" id="se2_cellbg2" class="husky_se2m_radio_bgc"><label for="se2_cellbg2">셀 배경색</label></dt>
                                                    <dd><span class="se2_pre_color"><button style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" type="button" class="husky_se2m_table_qe_bgcolor_btn"><span>색찾기</span></button></span>
                                                        <!-- layer:셀배경색 -->
                                                        <div style="display:none;position:absolute;top:20px;left:0px;" class="se2_layer se2_b_t_b1">
                                                            <div class="se2_in_layer husky_se2m_tbl_qe_bg_paletteHolder">
                                                            </div>
                                                        </div>
                                                        <!-- //layer:셀배경색-->

                                                    </dd>
                                                </dl>
                                                <!-- //샐배경색 -->
                                                <!-- 배경이미지선택 -->
                                                <dl style="display: none;" class="se2_qe2_2 husky_se2m_tbl_qe_review_bg">
                                                    <dt><input type="radio" name="se2_tbp3" id="se2_cellbg3" class="husky_se2m_radio_bgimg"><label for="se2_cellbg3">이미지</label></dt>
                                                    <dd><span class="se2_pre_bgimg"><button class="husky_se2m_table_qe_bgimage_btn se2_cellimg0" type="button"><span>배경이미지선택</span></button></span>
                                                        <!-- layer:배경이미지선택 -->
                                                        <div style="display:none;position:absolute;top:20px;left:-155px;" class="se2_layer se2_b_t_b1">
                                                            <div class="se2_in_layer husky_se2m_tbl_qe_bg_img_paletteHolder">
                                                                <ul class="se2_cellimg_set">
                                                                    <li><button class="se2_cellimg0" type="button"><span>배경없음</span></button></li>
                                                                    <li><button class="se2_cellimg1" type="button"><span>배경1</span></button></li>
                                                                    <li><button class="se2_cellimg2" type="button"><span>배경2</span></button></li>
                                                                    <li><button class="se2_cellimg3" type="button"><span>배경3</span></button></li>
                                                                    <li><button class="se2_cellimg4" type="button"><span>배경4</span></button></li>
                                                                    <li><button class="se2_cellimg5" type="button"><span>배경5</span></button></li>
                                                                    <li><button class="se2_cellimg6" type="button"><span>배경6</span></button></li>
                                                                    <li><button class="se2_cellimg7" type="button"><span>배경7</span></button></li>
                                                                    <li><button class="se2_cellimg8" type="button"><span>배경8</span></button></li>
                                                                    <li><button class="se2_cellimg9" type="button"><span>배경9</span></button></li>
                                                                    <li><button class="se2_cellimg10" type="button"><span>배경10</span></button></li>
                                                                    <li><button class="se2_cellimg11" type="button"><span>배경11</span></button></li>
                                                                    <li><button class="se2_cellimg12" type="button"><span>배경12</span></button></li>
                                                                    <li><button class="se2_cellimg13" type="button"><span>배경13</span></button></li>
                                                                    <li><button class="se2_cellimg14" type="button"><span>배경14</span></button></li>
                                                                    <li><button class="se2_cellimg15" type="button"><span>배경15</span></button></li>
                                                                    <li><button class="se2_cellimg16" type="button"><span>배경16</span></button></li>
                                                                    <li><button class="se2_cellimg17" type="button"><span>배경17</span></button></li>
                                                                    <li><button class="se2_cellimg18" type="button"><span>배경18</span></button></li>
                                                                    <li><button class="se2_cellimg19" type="button"><span>배경19</span></button></li>
                                                                    <li><button class="se2_cellimg20" type="button"><span>배경20</span></button></li>
                                                                    <li><button class="se2_cellimg21" type="button"><span>배경21</span></button></li>
                                                                    <li><button class="se2_cellimg22" type="button"><span>배경22</span></button></li>
                                                                    <li><button class="se2_cellimg23" type="button"><span>배경23</span></button></li>
                                                                    <li><button class="se2_cellimg24" type="button"><span>배경24</span></button></li>
                                                                    <li><button class="se2_cellimg25" type="button"><span>배경25</span></button></li>
                                                                    <li><button class="se2_cellimg26" type="button"><span>배경26</span></button></li>
                                                                    <li><button class="se2_cellimg27" type="button"><span>배경27</span></button></li>
                                                                    <li><button class="se2_cellimg28" type="button"><span>배경28</span></button></li>
                                                                    <li><button class="se2_cellimg29" type="button"><span>배경29</span></button></li>
                                                                    <li><button class="se2_cellimg30" type="button"><span>배경30</span></button></li>
                                                                    <li><button class="se2_cellimg31" type="button"><span>배경31</span></button></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- //layer:배경이미지선택-->
                                                    </dd>
                                                </dl>
                                                <!-- //배경이미지선택 -->
                                            </div>
                                            <dl style="display: block;" class="se2_qe3 se2_t_proper2">
                                                <dt><input type="radio" name="se2_tbp3" id="se2_tbp4" class="husky_se2m_radio_template"><label for="se2_tbp4">표 스타일</label></dt>
                                                <dd>
                                                    <div class="se2_qe3_table">
                                                        <div class="se2_select_ty2"><span class="se2_t_style1"></span><button class="se2_view_more husky_se2m_template_more" title="더보기" type="button"><span>더보기</span></button></div>
                                                        <!-- layer:표스타일 -->
                                                        <div style="display:none;top:33px;left:0;margin:0;" class="se2_layer_t_style">
                                                            <ul>
                                                                <li><button class="se2_t_style1" type="button"><span>표 스타일1</span></button></li>
                                                                <li><button class="se2_t_style2" type="button"><span>표 스타일2</span></button></li>
                                                                <li><button class="se2_t_style3" type="button"><span>표 스타일3</span></button></li>
                                                                <li><button class="se2_t_style4" type="button"><span>표 스타일4</span></button></li>
                                                                <li><button class="se2_t_style5" type="button"><span>표 스타일5</span></button></li>
                                                                <li><button class="se2_t_style6" type="button"><span>표 스타일6</span></button></li>
                                                                <li><button class="se2_t_style7" type="button"><span>표 스타일7</span></button></li>
                                                                <li><button class="se2_t_style8" type="button"><span>표 스타일8</span></button></li>
                                                                <li><button class="se2_t_style9" type="button"><span>표 스타일9</span></button></li>
                                                                <li><button class="se2_t_style10" type="button"><span>표 스타일10</span></button></li>
                                                                <li><button class="se2_t_style11" type="button"><span>표 스타일11</span></button></li>
                                                                <li><button class="se2_t_style12" type="button"><span>표 스타일12</span></button></li>
                                                                <li><button class="se2_t_style13" type="button"><span>표 스타일13</span></button></li>
                                                                <li><button class="se2_t_style14" type="button"><span>표 스타일14</span></button></li>
                                                                <li><button class="se2_t_style15" type="button"><span>표 스타일15</span></button></li>
                                                                <li><button class="se2_t_style16" type="button"><span>표 스타일16</span></button></li>
                                                            </ul>
                                                        </div>
                                                        <!-- //layer:표스타일 -->
                                                    </div>
                                                </dd>
                                            </dl>
                                            <div style="display:none" class="se2_btn_area">
                                                <button class="se2_btn_save" type="button"><span>My 리뷰저장</span></button>
                                            </div>
                                            <div class="se2_qdim0 husky_se2m_tbl_qe_dim1"></div>
                                            <div class="se2_qdim4 husky_se2m_tbl_qe_dim2"></div>
                                            <div class="se2_qdim6c husky_se2m_tbl_qe_dim_del_col"></div>
                                            <div class="se2_qdim6r husky_se2m_tbl_qe_dim_del_row"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--//@lazyload_html-->
                            <!-- //표/글양식 간단편집기 -->
                            <!-- 이미지 간단편집기 -->
                            <!--@lazyload_html qe_image-->
                            <div class="q_img_wrap">
                                <button class="_fold se2_qmax q_open_img_full" style="position:absolute;display:none;top:240px;left:210px;z-index:30;" title="최대화" type="button"><span>퀵에디터최대화</span></button>
                                <div class="_full se2_qeditor se2_table_set" style="position:absolute;display:none;top:140px;left:450px;z-index:30;">
                                    <div class="se2_qbar  q_dragable"><span class="se2_qmini"><button title="최소화" class="q_open_img_fold"><span>퀵에디터최소화</span></button></span></div>
                                    <div class="se2_qbody0">
                                        <div class="se2_qbody">
                                            <div class="se2_qe10">
                                                <label for="se2_swidth">가로</label><input type="text" class="input_ty1 widthimg" name="" id="se2_swidth" value="1024"><label class="se2_sheight" for="se2_sheight">세로</label><input type="text" class="input_ty1 heightimg" name="" id="se2_sheight" value="768"><button class="se2_sreset" type="button"><span>초기화</span></button>
                                                <div class="se2_qe10_1"><input type="checkbox" name="" class="se2_srate" id="se2_srate"><label for="se2_srate">가로 세로 비율 유지</label></div>
                                            </div>
                                            <div class="se2_qe11">
                                                <dl class="se2_qe11_1">
                                                    <dt><label for="se2_b_width2">테두리두께</label></dt>
                                                    <dd class="se2_numberStepper"><input type="text" class="input_ty1 input bordersize" value="1" maxlength="2" name="" id="se2_b_width2" readonly="readonly">
                                                        <button class="se2_add plus" type="button"><span>1px 더하기</span></button>
                                                        <button class="se2_del minus" type="button"><span>1px 빼기</span></button>
                                                    </dd>
                                                </dl>

                                                <dl class="se2_qe11_2">
                                                    <dt>테두리 색</dt>
                                                    <dd><span class="se2_pre_color"><button style="background:#000000;" type="button" class="husky_se2m_img_qe_bgcolor_btn"><span>색찾기</span></button></span>
                                                        <!-- layer:테두리 색 -->
                                                        <div style="display:none;position:absolute;top:20px;left:-209px;" class="se2_layer se2_b_t_b1">
                                                            <div class="se2_in_layer husky_se2m_img_qe_bg_paletteHolder">
                                                            </div>
                                                        </div>
                                                        <!-- //layer:테두리 색 -->
                                                    </dd>
                                                </dl>
                                            </div>
                                            <dl class="se2_qe12">
                                                <dt>정렬</dt>
                                                <dd><button title="정렬없음" class="se2_align0" type="button"><span>정렬없음</span></button><button title="좌측정렬" class="se2_align1 left" type="button"><span>좌측정렬</span></button><button title="우측정렬" class="se2_align2 right" type="button"><span>우측정렬</span></button>
                                                </dd>
                                            </dl>
                                            <button class="se2_highedit" type="button"><span>고급편집</span></button>
                                            <div class="se2_qdim0"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--//@lazyload_html-->
                            <!-- 이미지 간단편집기 -->
                        </div>
                    </div>
                    <!-- //입력 -->
                    <!-- 입력창조절/ 모드전환 -->
                    <div class="se2_conversion_mode" style="display:none">
                        <button type="button" class="se2_inputarea_controller husky_seditor_editingArea_verticalResizer" title="입력창 크기 조절"><span>입력창 크기 조절</span></button>
                        <ul class="se2_converter">
                            <li class="active"><button type="button" class="se2_to_editor"><span>Editor</span></button></li>
                            <li><button type="button" class="se2_to_html"><span>HTML</span></button></li>
                            <li><button type="button" class="se2_to_text"><span>TEXT</span></button></li>
                        </ul>
                    </div>
                    <!-- //입력창조절/ 모드전환 -->
                    <hr>
                    <!-- 얼럿 메세지 공통 -->
                    <div class="se2_alert_wrap" style="display:none">
                        <div class="se2_alert_content">
                            <div class="se2_alert_txts"></div>
                            <p class="se2_alert_btns">
                                <button type="button" class="se2_confirm"><span>확인</span></button><button type="button" class="se2_cancel"><span>취소</span></button>
                            </p>
                            <a href="#" class="btn_close">닫기</a>
                        </div>
                        <!-- 레이어 중앙정렬 -->
                        <span class="va_line"></span>
                        <div class="ie_cover"></div>
                    </div>
                    <!-- //얼럿 메세지 공통 -->
                </div>
            </div><!-- SE2 Markup End -->
        </div>
        <div class="right">
            <!-- 로딩중 이미지 -->
            <!--<div class="loading">
                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                <div>Loading...</div>
            </div>-->
            <div class="loading">
                <div class="binding"></div>
                <div class="pad">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
                <div class="text">
                    Unote is loading...
                </div>
            </div>
            <!-- //로딩중 이미지 -->
            <!-- addon main -->
            <div class="addOn-default">
                <p>Unote의 추가 기능을 통해<br>나의 글을 다듬어 보세요</p>
                <div class="addOnList">
                    <ul class="clearfix">
                        <li>
                            <span class="addOn-btn" title="맞춤법검사"><i class="fa fa-check-square-o" aria-hidden="true"></i>맞춤법검사<i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                        <li>
                            <span class="addOn-btn" title="문장추천"><!--<i class="fa fa-comments" aria-hidden="true"></i>--><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>문장추천<i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        </li>
                    </ul>
                    <p>또한, 내가 관리한 글감을 참고하며 <br>  글을 정리해보세요</p>
                    <div class="addOn-catgbtn">
                        <span class="catg"><i class="fa fa-list" aria-hidden="true"></i>참고글감</span>
                        <a class="dropdown">
                        <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
                        </a>
                        <div>
                            <!--카테고리 이동 안내 창-->
                            <div class="selCateg">
                                <div class="selCateg-inner">
                                    <div class="selList">
                                        <ul>
                                            <li class="goCateg"><a href="javascript:listArticle('list');">전체 글감</a></li>
                                            <li class="goCateg"><a href="javascript:listArticle('bookmark');">북마크</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--//카테고리 이동 안내 창-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- //addon main -->
            <div id="addOnWrap" class="scrollStyle" style="display:none;">

                    <!--맞춤법검사/윤문/글감리스트 영역-->
                    <div class="addOnCon">
                        <div class="addOn">
                        </div>
                    <!--
                        <div class="addOn addOn2">
                            <div id="bankSub" class="full-left-sublist listArticle">
                            </div>
                        </div>
                    -->
                    </div>

        </div>
    </div>
    <!--//contents-->
    <!--Example Start-->
    <div id="se2_sample">
        <div class="testBtn clearfix">
            <!--<input type="button" onclick="pasteHTML();" value="본문에 내용 넣기" />-->
            <!--<input type="button" onclick="showHTML();" value="본문 내용 가져오기" />-->
            <div class="newBtn" style="display:inline-block">
                <input type="button" onclick="newNote();" value="새노트"/>
            </div>
            <!--<div class="callNoteBtn" style="display:inline-block">
                <input type="button" value="불러오기"/>
            </div>-->
            <div class="serverBtn" style="display:inline-block">
                <input type="button" onclick="submitContents('save');" value="저장하기"/>
                <span id="saveNotice" style="display:none; color:red;">저장되었습니다.</span>
            </div>
            <!--<input type="button" onclick="setDefaultFont();" value="기본 폰트 지정하기 (궁서_24)" />-->
        </div>
        <form id="noteForm" action="/unoteapi/Note/saveNote" method="post">
            <input type="hidden" name= "title" id= "frmTitle" value=""/>
            <input type="hidden" name= "sType" id= "sType" value=""/>
            <input type="hidden" name= "n_idx" id= "n_idx" value=""/>
            <input type="hidden" name= "sBtnType" id= "sBtnType" value=""/>
            <textarea name="ir1" id="ir1" rows="10" cols="100" style="width:100%; display:none;" placeholder="노트를 작성하세요"></textarea>
            <!--textarea name="ir1" id="ir1" rows="10" cols="100" style="width:100%; display:none;">
                <p class="newTit" style="font-size:24pt; font-weight:bold;">소프트웨어 교육이 궁금해!</p>
                <p class="newTxt" style="font-size:11pt; text-align: justify">
                    2018년부터 소프트웨어 교육이 <span class="spelChk" style="background:red; color:#fff">정규교과로</span> 들어온다. 초등학교 17시간, 중학교 34시간으로 차지하는 비중은 크지 않지만, 모든 학생이 배우는 의무교육이라는 사실이 중요하다. 2014년 정부의 소프트웨어 중심사회 선언 이후 불과 1년 만에 <span class="spelChk" style="background:red; color:#fff">정규교과</span> 편성이 결정됐다. 수년에 걸쳐 천천히 바뀌는 교육계 입장에서 이 같은 변화는 당황스럽다. 소프트웨어 교육이라는 게 뭐기에 정부는 이렇게 서두를까?
                </p>
                <p class="newTxt" style="font-size:11pt; text-align: justify">
                    우리만 바쁜 게 아니다 그런데 나라 밖으로 눈을 돌리면 우리만 서두르는 게 아님을 확인할 수 있다. 미국 9개 주, 일본, 중국, 이스라엘, 에스토니아, 핀란드 등은 일찌감치 소프트웨어 교육을 고등학교 필수과목으로 지정했다. 영국은 여기에 한술 더 떠서 2014년부터 5세부터 16세까지 소프트웨어 교육을 필수적으로 가르치겠다고 선언했다. 어릴 때부터 소프트웨어 교육을 하겠다는 거다. 유사 이래 교육계에 이런 ‘호들갑’은 없었다. 이 같은 각 나라의 ‘호들갑’에는 소프트웨어 능력이 국가 경쟁력을 좌우한다는 확신이 깔렸다. 마크 앤드리슨은 2011년 월스트리트 저널에 “소프트웨어가 세상을 집어삼키는 이유”라는 제목의 칼럼에서 소프트웨어가 다른 산업을 집어삼킨 사례를 소개했다. 그 뒤로 5년이 지난 지금, 소프트웨어의 영향력은 당시보다 훨씬 더 커졌다. 이 변화는 예전 산업의 변화처럼 점진적인 것이 아니라 단숨에, 그리고 매우 파괴적으로 진행됐다. 사례는 너무나 많다. ‘카카오톡’은 통신사의 주 수익원이었던 문자 서비스를 집어삼켰다. 배달 앱의 등장으로 광고전단 회사들은 고사 직전에 이르렀다. 택시 운전사의 반발을 일으킨 우버(Uber)는 어떤가? 당장은 정부가 나서 택시 운전사를 보호해 줬지만, 이들의 입지는 위태롭기 짝이 없다. 수년 내에 무인자동차의 시대가 올 테니 말이다. 구글, 애플, 삼성전자 같은 IT 강자들이 자동차 산업에 뛰어든 지 오래다.
                </p>
                <p class="newTxt" style="font-size:11pt; text-align: justify">
                    내 직업은 안전할까? 우리 아이들이 살아갈 미래는 어떤 모습일까? 영국 옥스퍼드대 옥스퍼드 마틴 스쿨 연구팀은 ‘20년 내 로봇이 대체할 일자리’를 연구했다. 텔레마케터, 조립라인 생산직, 운동경기 심판, 물류 직원 등은 98~99% 대체할 수 있다. 직업 자체가 없어질 가능성이 매우 크다는 얘기다. 미래에 자신의 직업이 살아남을 수 있는지 궁금하다면 확인해보기 바란다.
                </p>
                <p class="newTxt" style="font-size:11pt; text-align: justify">
                    단순 지식이나 반복적인 육체활동을 하는 기술은 기계와 소프트웨어가 대신할 수 있다. 그러나 놀랍게도 인간의 전유물로 생각했던 분야들에도 소프트웨어가 침투해 들어왔다. 경제지 포브스는 매일 주식 시황 정보 기사 수십 건을 쏟아내는데, 기자 대신 소프트웨어가 기사를 쓴다. 간단한 정보성 기사의 경우, 기자가 쓴 기사와 소프트웨어가 쓴 기사를 구분할 수 없을 정도다. 금융상품도 소프트웨어가 만든다. 사람보다 훨씬 더 많은 정보를 바탕으로 적합한 상품을 <span class="spelChk" style="background:red; color:#fff">만들어낸다.이</span> 흐름을 되돌릴 수는 없다. 만약 우리 아이들이 소프트웨어를 이해하지 못한다면 이같이 거대한 흐름에 삼켜질 수밖에 없다. 소프트웨어 교육의 취지는 모두가 프로그래머가 되라는 뜻이 아니다. 미래 사회의 거대한 변화를 인지하고 소프트웨어를 이해하고, 지배할 줄 아는 사람이 되라는 뜻이다. 교육자, 의사, 법조인, 심지어 예술가까지! 어떤 직업을 갖든지 소프트웨어에 대한 이해가 필수다.
                </p>
                <p class="newTxt" style="font-size:11pt; text-align: justify">
                    소프트웨어 교육이란? 교과서는 소프트웨어 교육을 “컴퓨터적 사고를 통해 문제를 해결하는 인재를 길러내는 교육”이라고 정의한다. 무슨 뜻인가? 컴퓨터는 사람이 내린 지시에 따라 판단하고 명령을 수행한다. 이 판단 기준을 정하고 적절한 명령을 내리는 논리적인 사고가 바로 ‘컴퓨터적인 사고’다. 컴퓨터적인 사고는 3가지 단계를 거친다. 먼저 문제(또는 시장의 필요)를 해결할 방법을 설계해야 하며, 다음에는 프로그래밍 언어를 사용해 코딩하는 과정을 거친다. 여기까지는 가상세계에서 일어나는 일이므로, 문제를 해결하려면 현실 세계로 나올 수 있는 디바이스(스마트폰, PC, 로봇 등)가 필요하다. 이 과정을 거치면 문제를 해결(상품과 서비스)할 수 있게 된다. 코딩하는 방법, 디바이스를 만드는 방법을 배우는 게 핵심이 아니다. 문제를 해결할 수 있는 논리를 만드는 설계가 더 중요하다. 그래서 수학적, 과학적 소양이 충실한 사람이 컴퓨터적인 사고를 통해 <span class="spelChk" style="background:red; color:#fff">문제해결을</span> 잘할 수 있다. [네이버 지식백과] 소프트웨어 교육이 궁금해! (KISTI의 과학향기칼럼, KISTI)
                </p>
            </textarea-->
        </form>
    </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    var sContent = "" ;
    if(window.frameElement){
        /*jindo.$("se2_sample").style.display = "none";*/
    }else{
        var oEditor = createSEditor2(jindo.$("ir1"), {
            bUseToolbar : true,             // 툴바 사용 여부 (true:사용/ false:사용하지 않음)
            bUseVerticalResizer : false,        // 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
            bUseModeChanger : false,            // 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
            //bSkipXssFilter : true,        // client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
            //aAdditionalFontList : [["MS UI Gothic", "MS UI Gothic"], ["Comic Sans MS", "Comic Sans MS"],["TEST","TEST"]], // 추가 글꼴 목록
            fOnBeforeUnload : function(){
                //예제 코드
                //return "내용이 변경되었습니다.";
            }
        });
                    
        oEditor.run({
            fnOnAppReady: function(){

                var n_idx = <?=(isset($_GET['n_idx'])) ? $_GET['n_idx'] : '""'?>;

                if(n_idx > 0)
                {
                    $.post(
                            "/unoteapi/Note/rpcGetNoteInfo"
                            ,{
                                //"n_idx" : $('#site').val() 
                                "n_idx" : n_idx
                            }
                            ,function(data, status) 
                            {
                                if (status == "success" && data.code == 1)
                                {
                                    sContent = data.aNoteDetail.text;
                                    $('.noteTit').children('input').val(data.aNoteDetail.title);
                                    $('#sType').val('edit');
                                    $('#n_idx').val(n_idx);

                                    //예제 코드
                                    oEditor.exec("PASTE_HTML", [sContent]);
                                }
                                else if (status == "success" && data.code == 301)
                                {
                                    alert(data.msg);
                                    opener.close();
                                    // window.close();
                                }
                            }
                    );
                    
                }
                else
                {
                    sContent = '<span class="placeHoder" style="font-size: 16px; font-weight: bold; color:#ccc; ">글을 입력하세요</span>';
                    oEditor.exec("PASTE_HTML", [sContent]);
                }

            }
        });

        function pasteHTML() {
            var sHTML = "<span style='color:#FF0000;'>이미지도 같은 방식으로 삽입합니다.<\/span>";
            oEditor.exec("PASTE_HTML", [sHTML]);
        }

        function showHTML() {
            var sHTML = oEditor.getIR();
            alert(sHTML);
        }

        function setDefaultFont() {
            var sDefaultFont = 'Arial';
            var nFontSize = 11;
            oEditor.setDefaultFont(sDefaultFont, nFontSize);
        }

        $(window).load(function(){
            $.post(
              "/unoteapi/Addon/getCategory"
              ,function(data, status) {
                if (status == "success" && data.code == 1)
                {
                    for (var i=0; i<data.aCategory.length; i++) {
                        $('.selList>ul').append('<li class="goCateg"><a href="javascript:listArticle(\'category\', \''+data.aCategory[i].category_idx+'\')"><i class="fa fa-folder-open" aria-hidden="true"></i>'+data.aCategory[i].name+'</a></li>');
                    }
                    // console.log(data.aCategory); 
                }
              }
            );
        });

        // 이전 맞춤법 검색어 표시 해제
        function repPreSelectStyle(pre_search, text)
        {
            if(pre_search){
                var pre_search_style = '<span class="highlightChk">'+pre_search+'</span>';
                var replace_style = '<span class="underlineChk">'+pre_search+'</span>';
                text = text.replace(new RegExp(pre_search_style,'gi'), replace_style);
            }
            return text;
        }

        // 선택 맞춤법 검색어 표시
        function repSelectStyle(search, text)
        {
            if(search){
                var search_style = '<span class="underlineChk">'+search+'</span>';
                var replace_style = '<span class="highlightChk">'+search+'</span>';
                text = text.replace(new RegExp(search_style,'gi'), replace_style);
            }
            return text;
        }

        // 맞춤법 검색 적용
        function repApplyStyle(search, replace, text)
        {
            // 적용
            if(replace){
                var search_style = '<span class="highlightChk">'+search+'</span>';
                text = text.replace(new RegExp(search_style,'gi'), replace);
            }
            // 적용하지 않고 삭제할 경우
            else{
                var search_style = '<span class="highlightChk">'+search+'</span>';
                text = text.replace(new RegExp(search_style,'gi'), search);
            }
            return text;
        }

        function repAllStyle(aSplChk, text)
        {
            var search = '';
            var search_style = '';
            for(i=0; i<aSplChk.length; i++)
            {
                search = aSplChk[i].value;
                search_style = '<span class="underlineChk">'+search+'</span>';
                text = text.replace(new RegExp(search_style,'gi'), search);

                search_style2 = '<span class="highlightChk">'+search+'</span>';
                text = text.replace(new RegExp(search_style2,'gi'), search);
            }

            return text;
        }

        function removeStyleScript(text)
        {
            var script = '<style>.underlineChk{text-decoration: underline; text-decoration-color:red;color:red;}.highlightChk{background:red; color:#fff;}</style>';
            text = text.replace(new RegExp(script,'gi'), '');

            return text;
        }

        function removeTempTag(text)
        {
            // 이건 도대체 왜 추가되는지 모르곘다
            text = text.replace(/<div align="" style="">(.+)<\/div>(.+|)/ig, "$1$2");

            return text;
        }

        // 이거도 왜 추가되는지 모르겠다
        // oEditor.getIR();로 가져올때마다 추가됨
        function removeBrTag(text)
        {
            text = text.replace(/(.+)<p><br><\/p>$/ig, "$1");
            return text;
        }

        function newNote()
        {
            window.open('/unote/index.php');
        }

        $(".addOnList>ul>li").on("click",function(){
            var listIndex = $(this).index();

            $(".addOn-default").hide();

            // 맞춤법 검사하기
            if(listIndex == 0)
            {
                submitContents('spellChk');
            }
            // 윤문 추천 받기
            if(listIndex == 1)
            {
                submitContents('beautiChk');
            }        
            // 글감 불러오기
            // if(listIndex == 2)
            // {
            //     $(".addOn"+listIndex).show();
            //     listArticle();
            // }
        });


        function submitContents(sBtnType='')
        {
            $('#frmTitle').val($('.noteTit').children('input').val());
            $('#sBtnType').val(sBtnType);

            var text = removeBrTag(oEditor.getIR());
            var aSplChk = document.getElementsByName('aSplChk[]');

            text = repAllStyle(aSplChk, text);
            text = removeStyleScript(text);
            text = removeTempTag(text);

            // oEditor.exec("UPDATE_CONTENTS_FIELD");  // 에디터의 내용이 textarea에 적용됩니다.

            // 저장 시 맞춤법 검사 표시는 그대로 유지
            $('#ir1').val(text);

            var formData = $("#noteForm").serialize();
            
            $.ajax({
                type : "POST",
                url : "/unoteapi/Note/saveNote",
                cache : false,
                data : formData,
                beforeSend : beforeSend,
                success : onSuccess,
                error : onError
            });
        }
        function beforeSend()
        {
            if($('#sBtnType').val() != 'save')      $('.loading').show();
        }
        function onSuccess(json, status)
        {
            if(json.sBtnType != 'save')
            {
                setTimeout(function() {
                   $('.loading').hide();
                }, 1000);
            }

            if(json.pk){
                $('#sType').val('edit');
                $('#n_idx').val(json.pk);
                history.pushState(null, null, '/unote/index.php?n_idx='+$('#n_idx').val());
            }
            if(json.sBtnType == 'save' && json.code == '1')
            {
                $('#saveNotice').show();
                setTimeout(function() {
                    $('#saveNotice').fadeOut(500);
                }, 3000);
            }
            else if(json.sBtnType == 'spellChk' && json.code == '1')
            {
                spellChk();
            }
            else if(json.sBtnType == 'beautiChk' && json.code == '1')
            {
                beautiChk();
            }

        }
        function onError(data, status)
        {
            alert("error");
        }

        function spellChk()
        {
            var n_idx = $('#n_idx').val();
            var s_idx = '';

            $.post(
              "/unoteapi/Ibricks/apiSpellCheck"
              ,{
                   "n_idx" : n_idx
                   ,"s_idx" : s_idx
               }
              ,function(data, status) {
                if (status == "success" && data.code == 1)
                {
                    // editor 새로고침 추가 필요
                    oEditor.setIR('');
                    oEditor.exec("PASTE_HTML", [data.chkText]);
                    $('.addOn').html(data.html);
                    $("#addOnWrap").show();
                    // console.log(data); 
                }
              }
            );
        }
        function beautiChk()
        {
            // $('.splChk').html('맞춤법 검사하기');
            var n_idx = $('#n_idx').val();
            var s_idx = '';

            $.post(
              "/unoteapi/Ibricks/apiBeautiCheck"
              ,{
                   "n_idx" : n_idx
                   ,"s_idx" : s_idx
               }
              ,function(data, status) {
                if (status == "success" && data.code == 1)
                {
                    $('.addOn').html(data.html);
                    $("#addOnWrap").show();
                    // console.log(data.aNoteDetail); 
                }
              }
            );
        }
        function listArticle(sType='list', category_idx='')
        {
            $(".dropdown").children('span').toggleClass("fa-caret-down fa-caret-up");
            $(".addOn-default").hide();

            $.post(
              "/unoteapi/Ibricks/apiListArticle"
              ,{
                   "sType" : sType
                   ,"category_idx" : category_idx
               }
              ,function(data, status) {
                if (status == "success" && data.code == 1)
                {
                    $('.addOn').html(data.html);
                    $("#addOnWrap").show();
                    // console.log(data.aNoteDetail); 
                }
              }
            );
        }

        function getCategoryList()
        {
            if($(".selCateg").hasClass('noCateg')){
                alert('설정된 카테고리가 없습니다.');
            }
            else{
                $(".selCateg").show();
            }
        }

        function setDetailText(sText)
        {
            oEditor.exec("PASTE_HTML", [sText]);

            var text = removeBrTag(oEditor.getIR());
            text = removeTempTag(text);

            oEditor.setIR('');
            oEditor.exec("PASTE_HTML", [text]);
        }

        var wHeight = $(window).height();
        var editorHeight = wHeight - 60;
        var textareaHeight = editorHeight -41;
        $(".addOn-default").css({
            'height' :  editorHeight,
        });
        $("#smart_editor2").css({

            'height' :  editorHeight,
            'overflow-x' : 'hidden',
            'overflow-y' : 'auto',
            'margin' : '0 auto',
            'border-right' : '1px solid #eee'
        });

        $(".se2_input_area").css({
            'width' : '800px',
            'margin' : '0 auto',
            'height' : textareaHeight,
        });


        function responsiveView() {
            wHeight = $(window).height();
            editorHeight = wHeight - 60;
            textareaHeight = editorHeight - 41;
            
            $(".addOn-default").css({
                'height' :  editorHeight,
            });
            $("#smart_editor2").css({
                'height' :  editorHeight,
                'overflow-x' : 'hidden',
                'overflow-y' : 'auto',

                'border-right' : '1px solid #eee'
            });
            $(".se2_input_area").css({
                'width' : '800px',
                'margin' : '0 auto',
                'height' : textareaHeight,
            });


        }


        $(window).on('load', responsiveView);
        $(window).on('resize', responsiveView);



        /*화면확장*/
        $(".expandBtn").on("click",function () {
            $("#editorCont .left").toggleClass("open");
            $("#editorCont .right").toggleClass("open");
            $(".expand-inner i").toggleClass("fa-expand fa-compress");
        });

        /*로그아웃*/
        $(".userInfo").on("click",function () {
            $(".userBtn").slideToggle();
            $(".name i").toggleClass("fa-caret-down fa-caret-up");
        });

        /*참조글감*/
        $(".dropdown").on("click",function () {
           $(this).children('span').toggleClass("fa-caret-down fa-caret-up");
           $(".selCateg").slideToggle();
        });
    }
</script>

<!--Example End-->
</body>
</html>
