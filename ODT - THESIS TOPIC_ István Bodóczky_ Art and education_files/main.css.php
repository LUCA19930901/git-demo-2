
/* Altalanos tulajdonsagok */

HTML, BODY, DIV, TABLE, TR, TD, INPUT, SELECT, TEXTAREA, H1, H2, H3, H4, H5, H6, P, UL, LI {
  font-family: Verdana, Tahoma, Arial;
  font-size: 11px;
}

TABLE {
  empty-cells: show;
  border-collapse: collapse;
}

FORM {
  margin: 0px;
}

HR {
  color: #eccaa3;
  background-color: #eccaa3;
  height: 1px;
  border: none;
}

A {
  text-decoration: none;
}

A IMG {
  border: none;
}

A.externalLink, A.link, DIV.cikk A, SPAN.kozlurl A {
  color: #C81903;
  font-weight: bold;
}

A.externalLink SPAN.icon {
  background: transparent url(https://doktori.hu/img/external.png) no-repeat right center;
  width: 17px;
  height: 12px;
  display: inline-block;
}

A.externalLink:visited {
}

SPAN.kozlurl_res {
  background: #C8C68F;
  border: 1px solid #ECCAA3;
  padding: 2px;
  display: inline-block;
  margin-bottom: 2px;
}
SPAN.kozlurl_res SPAN {
  font-weight: bold;
}

span.kozlerr { font-weight: bold; color: #C81903; }

A.link:hover, DIV.cikk A:hover {
  text-decoration: underline;
}

TEXTAREA {
  padding: 2px;
}

.sorkizart {
  text-align: justify;
}

.lighttext {
  color: #777777;
  font-weight: bold;
}

.subtitle {
  font-size: 13px;
  font-weight: bold;
  color: #000000;
  margin: 0 0 8px 0;
}

.subtitleBK {
  font-size: 13px;
  font-weight: bold;
  color: #000000;
  margin: 0 0 8px 0;
  background: #e2e0a9;
  padding: 3px;
}

.elmaradt {
  font-weight: bold;
}

div.popup-window {
  background: url(https://doktori.hu/img/bg.png);
  position: fixed;
  width: 100%;
  height: 100%;
  min-width: 1020px;
  min-height: 600px;
  left: 0;
  top: 0;
  padding: 0;
  margin: 0;
  z-index: 200;
  text-align: center;
  overflow-y: scroll;
}

div.popup-info {
  background: #fff;
  width: 260px;
  float: left;
  margin: 10px;
  padding-bottom: 6px;
}
div.popup-info div {
  margin: 6px;
  text-align: left;
}

div.popup-box {
  float: left;
  margin-top: 10px;
  text-align: center;
}
div.popup-box span {
  background: #fff; padding: 6px; display: inline-block;
}

div.popup-msg {
  background: #888888;
  color: #fff;
  font-weight: bold;
  padding: 6px;
  margin: 10px auto;
}
div.popup-error {
  background: #fff;
  width: 600px;
  margin: 40px auto;
  padding: 15px;
  text-align: left;
  position: relative;
}
div.popup-error #close {
  background: #fff;
  color: #781903;
  font-weight: bold;
  padding: 4px 6px;
  font-size: 14px;
  text-align: center;
  position: absolute;
  right: 0;
  top: 0;
}

span.profile { background: #eccaa3; padding: 0px 0px; display: inline-block; }
span.profile img { border: 3px solid #f7f5c6; }
/* listaban nem teszunk ki keretet kore */
.list span.profile { background: transparent;  }
.list span.profile img { border: none; vertical-align: middle; }
.list span.profile img.dd { position: absolute; margin-left: -102px; }

.list tr.pn td { border: none; }
.list tr.pn p, .hallgkepviselo { margin: 0 0 2px 190px; }
.list tr.pn p img { border: none; vertical-align: middle; }
.list tr.pn div { font-size: 18px; margin: 10px 0 10px 150px; background: url(https://doktori.hu/img/ABC_bg.gif) top left no-repeat; width: 32px; text-align: center; }
.listgroup { font-size: 14px; margin: 10px 0 10px 150px; }
.hallgkepviselo { padding-left: 34px; line-height: 34px; }

.help { cursor: help; }
.nemok { color: #C81903; font-weight: bold; }
div.checkold { color: #C81903; font-weight: bold; margin: 0 0 10px 0; font-size: 12px; }

DIV.panel {
  border: 1px solid #eccaa3;
  padding: 4px;
}

SPAN.inverz {
  background-color: #ffff00;
}

TABLE.normaltable TD
{
  border-style: solid;
  border-color: #eccaa3;
  border-left-width: 0px;
  border-top-width: 0px;
  border-right-width: 1px;
  border-bottom-width: 1px;
}

TD.tbl_header
{
  background-color: #e2e0a9;
  height: 14px;
  color: #781903;
}

TD#pgMenu {
  width: 188px;
  background-color: #f7f5c6;
}

/* Oldal munkaterulete */
TD#pgMain {
  background-color: #ffffff;
}

TD.pgToolbar {
  height: 24px;
  color: #781903;
  font-size: 10px;
  padding: 2px 16px 2px 6px;
}

TD.pgToolbar_empty {
  height: 11px;
  color: #781903;
  font-size: 10px;
  padding: 2px 16px 2px 6px;
}

TD.pgContent {
  padding-left: 6px;
}

/* Oldal lablece */
TD#pgFooter {
  height: 26px;
  background-color: #ffffff;
  background-image: url(https://doktori.hu/img/p_footer_bg.gif);
  padding-left: 8px;
  padding-top: 4px;
}
TD#pgFooter TD {
  height: 22px;
  font-size: 10px;
  font-weight: normal;
  color: #781903;
}

/* Oldal cime */
TD#pgTitle {
  border-top: 1px solid #781903;
  background: url(https://doktori.hu/img/p_feather_top.gif) center top;
  background-repeat: repeat-x;
  font-size: 13px;
  font-weight: bold;
  color: #000000;

  padding: 10px 0px 20px 6px;
}

/* Oldal leirasa */
TD#pgDesc {
  height: 20px;
  font-size: 11px;
  font-weight: normal;
  padding-left: 6px;
  color: #781903;
}
.pgDesc {
  font-size: 11px;
  font-weight: normal;
  color: #781903;
}

/* Oldal lablece */
TD#pgContentFooter {
  height: 22px;
  background-color: #ffffff;
  background: url(https://doktori.hu/img/p_feather_bottom.gif) center bottom;
  background-repeat: repeat-x;
  border-bottom: 1px solid #781903;
}

TABLE#pgMsg TD {
  padding-left: 6px;
  font-size: 10px;
  font-weight: bold;
  height: 14px;
}

TABLE#pgMsg .msgS {
  background-color: #fcff00;
  color: #781903;
}

TABLE#pgMsg .msgW {
  background-color: #ff0000;
  color: #fcff00;
}

TD#pgSubmenuCell {
  height: 25px;
  background-color: #a33d24;
}

TABLE#pgSubmenu {
  height: 25px;
}

TABLE#pgSubmenu TD {
  border-bottom: 1px solid #690000;
}

TABLE#pgSubmenu TD.smSeparator, TABLE#pgSubmenu TD.smSeparator IMG {
  width: 15px;
}

TABLE#pgSubmenu TD.smSepLine {
  width: 2px;
  background-image: url(https://doktori.hu/img/sm_separe_bg.gif);
  background-repeat: no-repeat;
}

TABLE#pgSubmenu TD.smButton {
  background-image: url(https://doktori.hu/img/sm_button_bg.gif);
  color: #ffffff;
  text-align: center;
  white-space: nowrap;
  padding-left: 6px;
  padding-right: 6px;
}

TABLE#pgSubmenu TD.smButton A {
  color: #ffffff;
}

TABLE#pgSubmenu TD.smButtonActive {
  background-image: url(https://doktori.hu/img/sm_button_active_bg.gif);
  color: #000000;
  border-bottom: none;
  text-align: center;
  white-space: nowrap;
  padding-left: 6px;
  padding-right: 6px;
}

TABLE#pgSubmenu TD.smButtonActive A {
  color: #000000;
}

TD#pgInfoLine {
  height: 16px;
  background-color: #eccaa3;
}

TD#pgInfoLine TABLE {
  border-bottom: 1px solid #690000;
}

TD.pgInfoLineTXT {
  padding-left: 14px;
  font-size: 9px;
}

DIV.hint {
  display: none;
  position: absolute;
  width: 180px;
  padding: 16px;
  background-color: #ffffff;
  color: #000000;
  font-weight: normal;
  font-style: normal;
  border: 1px solid #690000;
  z-index: 100;
  text-align: left;
}

div.keret {
  margin-top: 13px;
  background: transparent url(https://doktori.hu/img/f_left_bg.gif) top left repeat-y;
  padding-left: 4px;
  border-top: 1px solid #eccaa3;
  border-right: 1px solid #eccaa3;
  border-bottom: 1px solid #eccaa3;
  box-shadow: 2px 2px 4px #d4d2bf;
}

.button {
  background-color: #781903;
  color: #ffffff;
  border: 1px solid #781903;
  height: 20px;
  font-weight: bold;
}

UL.txt {
  padding-left: 30px;
  margin-left: 10px;
}

UL.txt LI {
  line-height: 16px;
  list-style-type: circle;
}

/* Menu */
DIV.menuGroup DIV.label_open, DIV.menuGroup DIV.label_open A, A.mainmenu {
  font-weight: bold;
  font-size: 10px;
  color: #000000;
  cursor: hand;
  cursor: pointer;
}

DIV.menuGroup DIV.label_close, DIV.menuGroup DIV.label_close A {
  color: #000000;
  font-weight: bold;
  font-size: 10px;
  cursor: hand;
  cursor: pointer;
}

DIV.menuGroup A.menuLink {
  color: #781903;
  display: block;
  width: 100%;
}

DIV.menuGroup A.menuLink:hover {
  background-image: url(https://doktori.hu/img/m_select_bg.gif);
}

DIV.errListHeader {
  font-weight: bold;
  color: #781903;
}

UL.errList {
  padding-left: 10px;
  margin-left: 10px;
}

UL.errList LI {
  line-height: 16px;
  list-style-type: circle;
  color: #781903;
}
UL.errList LI.empty {
  list-style-type: none;
}

/* Cikk */

.MsoNormal
{
  font-family: Verdana;
  font-size: 11px;
  font-weight: normal;
}

P {
  padding: 0px;
  margin: 0px 0px 8px 0px;
}

H1 {
   font-size: 17px;
   font-weight: bold;
}

H2 {
   font-size: 14px;
   font-weight: bold;
   text-decoration: underline;
   padding: 0px;
   margin: 0px 0px 3px 0px;
}

H3 {
   font-size: 13px;
   font-weight: bold;
   line-height: 250%;
   margin-top: 0px;
   margin-bottom: 0px;
}

H4, H5, H6 {
   font-size: 11px;
   font-weight:bold;
   color:#550000;
}

DIV, DIV.Section1 {
  padding: 0px;
}

P.MsoTitle {
   font-family: Verdana;
   font-size:12px;
   font-weight:normal;
   text-align: center
}

P.MsoBodyText, LI.MsoBodyText, DIV.MsoBodyText {
  text-align: center;
  margin: 0px 0px 6px 0px;
}

DIV.small_button A {
  background: url(https://doktori.hu/img/button_bg.png) left top;
  color: #ffffff;
  font-weight: bold;
  border: 1px solid #781903;
  padding: 0px 3px 0px 3px;
  font-size:10px;
}

DIV.langRelative {
  position: relative;
  top: 38px;
  padding: 0px;
  margin: 0px;
  height: 10px;
}

DIV.langRelativeFloat {
  position: relative;
  float: right;
}
