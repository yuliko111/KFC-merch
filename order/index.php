<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оформить заказ");
?>
<form action="/merch/order/" method="POST" name="ORDER_FORM" id="bx-soa-order-form"
	enctype="multipart/form-data">
	<input type="hidden" name="sessid" id="sessid" value="38994574e713f469abb400fa31fbcdd3"> <input
		type="hidden" name="soa-action" value="saveOrderAjax">
	<input type="hidden" name="location_type" value="code">
	<input type="hidden" name="BUYER_STORE" id="BUYER_STORE" value="0">
	<div id="basket">
		<div class="program-checkout-wrapper">
			<div class="checkout">
				<div class="checkout-left">
					<h2 class="title-h2">Оплата и доставка</h2>
					<div class="checkout-left-phone-bonus">
						<div class="checkout-left-phone-bonus-text">Бонусы на балансе карты</div>
						<div class="checkout-left-phone-bonus-input">
							<div class="checkout-left-phone-bonus-input-text">0 / 116</div>
							<input type="range" name="BONUSES" min="0" max="116"
								class="checkout-left-phone-bonus-input-el">
						</div>
					</div>
					<div class="checkout-left-delivery-title">Контактная информация:</div>
					<div data-code="0" class="checkout-left-grid">
						<div class="k-input-wrapper">
							<input placeholder="Имя*" name="ORDER_PROP_1"class="k-input">
						</div>
						<div class="k-input-wrapper">
							<input placeholder="Фамилия*" name="ORDER_PROP_2"class="k-input">
						</div>
					</div>
					<div data-code="1" class="checkout-left-grid">
						<div class="k-input-wrapper">
							<input placeholder="E-mail*" name="ORDER_PROP_4" class="k-input">
						</div>
						<div class="k-input-wrapper">
							<div class="iti iti--allow-dropdown iti--separate-dial-code ag-countrymask">
								<div class="iti__flag-container">
									<div class="iti__selected-flag" role="combobox"
										aria-owns="country-listbox" aria-expanded="false" tabindex="0"
										title="Россия: +7" aria-activedescendant="iti-item-ru">
										<div class="iti__flag iti__ru"></div>
										<div class="iti__selected-dial-code">+7</div>
										<div class="iti__arrow"></div>
									</div>
									<ul class="iti__country-list iti__hide" id="country-listbox"
										role="listbox">
										<li class="iti__country iti__preferred" tabindex="-1"
											id="iti-item-az" role="option" data-dial-code="994"
											data-country-code="az">
											<div class="iti__flag-box">
												<div class="iti__flag iti__az"></div>
											</div>
											<span class="iti__country-name">Азербайджан</span><span
												class="iti__dial-code">+994</span>
										</li>
										<li class="iti__country iti__preferred" tabindex="-1"
											id="iti-item-am" role="option" data-dial-code="374"
											data-country-code="am">
											<div class="iti__flag-box">
												<div class="iti__flag iti__am"></div>
											</div>
											<span class="iti__country-name">Армения</span><span
												class="iti__dial-code">+374</span>
										</li>
										<li class="iti__country iti__preferred" tabindex="-1"
											id="iti-item-by" role="option" data-dial-code="375"
											data-country-code="by">
											<div class="iti__flag-box">
												<div class="iti__flag iti__by"></div>
											</div>
											<span class="iti__country-name">Беларусь</span><span
												class="iti__dial-code">+375</span>
										</li>
										<li class="iti__country iti__preferred" tabindex="-1"
											id="iti-item-kz" role="option" data-dial-code="7"
											data-country-code="kz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kz"></div>
											</div>
											<span class="iti__country-name">Казахстан</span><span
												class="iti__dial-code">+7</span>
										</li>
										<li class="iti__country iti__preferred" tabindex="-1"
											id="iti-item-kg" role="option" data-dial-code="996"
											data-country-code="kg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kg"></div>
											</div>
											<span class="iti__country-name">Киргизия</span><span
												class="iti__dial-code">+996</span>
										</li>
										<li class="iti__country iti__preferred iti__active"
											tabindex="-1" id="iti-item-ru" role="option"
											data-dial-code="7" data-country-code="ru"
											aria-selected="true">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ru"></div>
											</div>
											<span class="iti__country-name">Россия</span><span
												class="iti__dial-code">+7</span>
										</li>
										<li class="iti__country iti__preferred" tabindex="-1"
											id="iti-item-rs" role="option" data-dial-code="381"
											data-country-code="rs">
											<div class="iti__flag-box">
												<div class="iti__flag iti__rs"></div>
											</div>
											<span class="iti__country-name">Сербия</span><span
												class="iti__dial-code">+381</span>
										</li>
										<li class="iti__country iti__preferred" tabindex="-1"
											id="iti-item-tm" role="option" data-dial-code="993"
											data-country-code="tm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tm"></div>
											</div>
											<span class="iti__country-name">Туркменистан</span><span
												class="iti__dial-code">+993</span>
										</li>
										<li class="iti__country iti__preferred" tabindex="-1"
											id="iti-item-uz" role="option" data-dial-code="998"
											data-country-code="uz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__uz"></div>
											</div>
											<span class="iti__country-name">Узбекистан</span><span
												class="iti__dial-code">+998</span>
										</li>
										<li class="iti__divider" role="separator" aria-disabled="true">
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-au" role="option" data-dial-code="61"
											data-country-code="au">
											<div class="iti__flag-box">
												<div class="iti__flag iti__au"></div>
											</div>
											<span class="iti__country-name">Австралия</span><span
												class="iti__dial-code">+61</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-at" role="option" data-dial-code="43"
											data-country-code="at">
											<div class="iti__flag-box">
												<div class="iti__flag iti__at"></div>
											</div>
											<span class="iti__country-name">Австрия</span><span
												class="iti__dial-code">+43</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-az" role="option" data-dial-code="994"
											data-country-code="az">
											<div class="iti__flag-box">
												<div class="iti__flag iti__az"></div>
											</div>
											<span class="iti__country-name">Азербайджан</span><span
												class="iti__dial-code">+994</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-al" role="option" data-dial-code="355"
											data-country-code="al">
											<div class="iti__flag-box">
												<div class="iti__flag iti__al"></div>
											</div>
											<span class="iti__country-name">Албания</span><span
												class="iti__dial-code">+355</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-dz" role="option" data-dial-code="213"
											data-country-code="dz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__dz"></div>
											</div>
											<span class="iti__country-name">Алжир</span><span
												class="iti__dial-code">+213</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-as" role="option" data-dial-code="1"
											data-country-code="as">
											<div class="iti__flag-box">
												<div class="iti__flag iti__as"></div>
											</div>
											<span class="iti__country-name">Американское
												Самоа</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ai" role="option" data-dial-code="1"
											data-country-code="ai">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ai"></div>
											</div>
											<span class="iti__country-name">Ангилья</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ao" role="option" data-dial-code="244"
											data-country-code="ao">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ao"></div>
											</div>
											<span class="iti__country-name">Ангола</span><span
												class="iti__dial-code">+244</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ad" role="option" data-dial-code="376"
											data-country-code="ad">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ad"></div>
											</div>
											<span class="iti__country-name">Андорра</span><span
												class="iti__dial-code">+376</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ag" role="option" data-dial-code="1"
											data-country-code="ag">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ag"></div>
											</div>
											<span class="iti__country-name">Антигуа и
												Барбуда</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ar" role="option" data-dial-code="54"
											data-country-code="ar">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ar"></div>
											</div>
											<span class="iti__country-name">Аргентина</span><span
												class="iti__dial-code">+54</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-am" role="option" data-dial-code="374"
											data-country-code="am">
											<div class="iti__flag-box">
												<div class="iti__flag iti__am"></div>
											</div>
											<span class="iti__country-name">Армения</span><span
												class="iti__dial-code">+374</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-aw" role="option" data-dial-code="297"
											data-country-code="aw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__aw"></div>
											</div>
											<span class="iti__country-name">Аруба</span><span
												class="iti__dial-code">+297</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-af" role="option" data-dial-code="93"
											data-country-code="af">
											<div class="iti__flag-box">
												<div class="iti__flag iti__af"></div>
											</div>
											<span class="iti__country-name">Афганистан</span><span
												class="iti__dial-code">+93</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bs" role="option" data-dial-code="1"
											data-country-code="bs">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bs"></div>
											</div>
											<span class="iti__country-name">Багамы</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bd" role="option" data-dial-code="880"
											data-country-code="bd">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bd"></div>
											</div>
											<span class="iti__country-name">Бангладеш</span><span
												class="iti__dial-code">+880</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bb" role="option" data-dial-code="1"
											data-country-code="bb">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bb"></div>
											</div>
											<span class="iti__country-name">Барбадос</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bh" role="option" data-dial-code="973"
											data-country-code="bh">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bh"></div>
											</div>
											<span class="iti__country-name">Бахрейн</span><span
												class="iti__dial-code">+973</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-by" role="option" data-dial-code="375"
											data-country-code="by">
											<div class="iti__flag-box">
												<div class="iti__flag iti__by"></div>
											</div>
											<span class="iti__country-name">Беларусь</span><span
												class="iti__dial-code">+375</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bz" role="option" data-dial-code="501"
											data-country-code="bz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bz"></div>
											</div>
											<span class="iti__country-name">Белиз</span><span
												class="iti__dial-code">+501</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-be" role="option" data-dial-code="32"
											data-country-code="be">
											<div class="iti__flag-box">
												<div class="iti__flag iti__be"></div>
											</div>
											<span class="iti__country-name">Бельгия</span><span
												class="iti__dial-code">+32</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bj" role="option" data-dial-code="229"
											data-country-code="bj">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bj"></div>
											</div>
											<span class="iti__country-name">Бенин</span><span
												class="iti__dial-code">+229</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bm" role="option" data-dial-code="1"
											data-country-code="bm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bm"></div>
											</div>
											<span class="iti__country-name">Бермуды</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bg" role="option" data-dial-code="359"
											data-country-code="bg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bg"></div>
											</div>
											<span class="iti__country-name">Болгария</span><span
												class="iti__dial-code">+359</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bo" role="option" data-dial-code="591"
											data-country-code="bo">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bo"></div>
											</div>
											<span class="iti__country-name">Боливия</span><span
												class="iti__dial-code">+591</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bq" role="option" data-dial-code="599"
											data-country-code="bq">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bq"></div>
											</div>
											<span class="iti__country-name">Бонэйр, Синт-Эстатиус и
												Саба</span><span class="iti__dial-code">+599</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ba" role="option" data-dial-code="387"
											data-country-code="ba">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ba"></div>
											</div>
											<span class="iti__country-name">Босния и
												Герцеговина</span><span
												class="iti__dial-code">+387</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bw" role="option" data-dial-code="267"
											data-country-code="bw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bw"></div>
											</div>
											<span class="iti__country-name">Ботсвана</span><span
												class="iti__dial-code">+267</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-br" role="option" data-dial-code="55"
											data-country-code="br">
											<div class="iti__flag-box">
												<div class="iti__flag iti__br"></div>
											</div>
											<span class="iti__country-name">Бразилия</span><span
												class="iti__dial-code">+55</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-io" role="option" data-dial-code="246"
											data-country-code="io">
											<div class="iti__flag-box">
												<div class="iti__flag iti__io"></div>
											</div>
											<span class="iti__country-name">Британская территория в
												Индийском океане</span><span
												class="iti__dial-code">+246</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bn" role="option" data-dial-code="673"
											data-country-code="bn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bn"></div>
											</div>
											<span
												class="iti__country-name">Бруней-Даруссалам</span><span
												class="iti__dial-code">+673</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bf" role="option" data-dial-code="226"
											data-country-code="bf">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bf"></div>
											</div>
											<span class="iti__country-name">Буркина-Фасо</span><span
												class="iti__dial-code">+226</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bi" role="option" data-dial-code="257"
											data-country-code="bi">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bi"></div>
											</div>
											<span class="iti__country-name">Бурунди</span><span
												class="iti__dial-code">+257</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bt" role="option" data-dial-code="975"
											data-country-code="bt">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bt"></div>
											</div>
											<span class="iti__country-name">Бутан</span><span
												class="iti__dial-code">+975</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-vu" role="option" data-dial-code="678"
											data-country-code="vu">
											<div class="iti__flag-box">
												<div class="iti__flag iti__vu"></div>
											</div>
											<span class="iti__country-name">Вануату</span><span
												class="iti__dial-code">+678</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-hu" role="option" data-dial-code="36"
											data-country-code="hu">
											<div class="iti__flag-box">
												<div class="iti__flag iti__hu"></div>
											</div>
											<span class="iti__country-name">Венгрия</span><span
												class="iti__dial-code">+36</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ve" role="option" data-dial-code="58"
											data-country-code="ve">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ve"></div>
											</div>
											<span class="iti__country-name">Венесуэла (Боливарианская
												Республика)</span><span
												class="iti__dial-code">+58</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-vg" role="option" data-dial-code="1"
											data-country-code="vg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__vg"></div>
											</div>
											<span class="iti__country-name">Виргинские
												Острова</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-vi" role="option" data-dial-code="1"
											data-country-code="vi">
											<div class="iti__flag-box">
												<div class="iti__flag iti__vi"></div>
											</div>
											<span class="iti__country-name">Виргинские Острова
												(США)</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-vn" role="option" data-dial-code="84"
											data-country-code="vn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__vn"></div>
											</div>
											<span class="iti__country-name">Вьетнам</span><span
												class="iti__dial-code">+84</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ga" role="option" data-dial-code="241"
											data-country-code="ga">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ga"></div>
											</div>
											<span class="iti__country-name">Габон</span><span
												class="iti__dial-code">+241</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ht" role="option" data-dial-code="509"
											data-country-code="ht">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ht"></div>
											</div>
											<span class="iti__country-name">Гаити</span><span
												class="iti__dial-code">+509</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gy" role="option" data-dial-code="592"
											data-country-code="gy">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gy"></div>
											</div>
											<span class="iti__country-name">Гайана</span><span
												class="iti__dial-code">+592</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gm" role="option" data-dial-code="220"
											data-country-code="gm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gm"></div>
											</div>
											<span class="iti__country-name">Гамбия</span><span
												class="iti__dial-code">+220</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gh" role="option" data-dial-code="233"
											data-country-code="gh">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gh"></div>
											</div>
											<span class="iti__country-name">Гана</span><span
												class="iti__dial-code">+233</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gp" role="option" data-dial-code="590"
											data-country-code="gp">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gp"></div>
											</div>
											<span class="iti__country-name">Гваделупа</span><span
												class="iti__dial-code">+590</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gt" role="option" data-dial-code="502"
											data-country-code="gt">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gt"></div>
											</div>
											<span class="iti__country-name">Гватемала</span><span
												class="iti__dial-code">+502</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gn" role="option" data-dial-code="224"
											data-country-code="gn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gn"></div>
											</div>
											<span class="iti__country-name">Гвинея</span><span
												class="iti__dial-code">+224</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gw" role="option" data-dial-code="245"
											data-country-code="gw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gw"></div>
											</div>
											<span class="iti__country-name">Гвинея-Бисау</span><span
												class="iti__dial-code">+245</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-de" role="option" data-dial-code="49"
											data-country-code="de">
											<div class="iti__flag-box">
												<div class="iti__flag iti__de"></div>
											</div>
											<span class="iti__country-name">Германия</span><span
												class="iti__dial-code">+49</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gg" role="option" data-dial-code="44"
											data-country-code="gg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gg"></div>
											</div>
											<span class="iti__country-name">Гернси</span><span
												class="iti__dial-code">+44</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gi" role="option" data-dial-code="350"
											data-country-code="gi">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gi"></div>
											</div>
											<span class="iti__country-name">Гибралтар</span><span
												class="iti__dial-code">+350</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-hn" role="option" data-dial-code="504"
											data-country-code="hn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__hn"></div>
											</div>
											<span class="iti__country-name">Гондурас</span><span
												class="iti__dial-code">+504</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-hk" role="option" data-dial-code="852"
											data-country-code="hk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__hk"></div>
											</div>
											<span class="iti__country-name">Гонконг</span><span
												class="iti__dial-code">+852</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gd" role="option" data-dial-code="1"
											data-country-code="gd">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gd"></div>
											</div>
											<span class="iti__country-name">Гренада</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gl" role="option" data-dial-code="299"
											data-country-code="gl">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gl"></div>
											</div>
											<span class="iti__country-name">Гренландия</span><span
												class="iti__dial-code">+299</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gr" role="option" data-dial-code="30"
											data-country-code="gr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gr"></div>
											</div>
											<span class="iti__country-name">Греция</span><span
												class="iti__dial-code">+30</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ge" role="option" data-dial-code="995"
											data-country-code="ge">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ge"></div>
											</div>
											<span class="iti__country-name">Грузия</span><span
												class="iti__dial-code">+995</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gu" role="option" data-dial-code="1"
											data-country-code="gu">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gu"></div>
											</div>
											<span class="iti__country-name">Гуам</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-dk" role="option" data-dial-code="45"
											data-country-code="dk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__dk"></div>
											</div>
											<span class="iti__country-name">Дания</span><span
												class="iti__dial-code">+45</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-je" role="option" data-dial-code="44"
											data-country-code="je">
											<div class="iti__flag-box">
												<div class="iti__flag iti__je"></div>
											</div>
											<span class="iti__country-name">Джерси</span><span
												class="iti__dial-code">+44</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-dj" role="option" data-dial-code="253"
											data-country-code="dj">
											<div class="iti__flag-box">
												<div class="iti__flag iti__dj"></div>
											</div>
											<span class="iti__country-name">Джибути</span><span
												class="iti__dial-code">+253</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-dm" role="option" data-dial-code="1"
											data-country-code="dm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__dm"></div>
											</div>
											<span class="iti__country-name">Доминика</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-do" role="option" data-dial-code="1"
											data-country-code="do">
											<div class="iti__flag-box">
												<div class="iti__flag iti__do"></div>
											</div>
											<span class="iti__country-name">Доминиканская
												Республика</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-eg" role="option" data-dial-code="20"
											data-country-code="eg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__eg"></div>
											</div>
											<span class="iti__country-name">Египет</span><span
												class="iti__dial-code">+20</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-zm" role="option" data-dial-code="260"
											data-country-code="zm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__zm"></div>
											</div>
											<span class="iti__country-name">Замбия</span><span
												class="iti__dial-code">+260</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-eh" role="option" data-dial-code="212"
											data-country-code="eh">
											<div class="iti__flag-box">
												<div class="iti__flag iti__eh"></div>
											</div>
											<span class="iti__country-name">Западная Сахара</span><span
												class="iti__dial-code">+212</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-zw" role="option" data-dial-code="263"
											data-country-code="zw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__zw"></div>
											</div>
											<span class="iti__country-name">Зимбабве</span><span
												class="iti__dial-code">+263</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-il" role="option" data-dial-code="972"
											data-country-code="il">
											<div class="iti__flag-box">
												<div class="iti__flag iti__il"></div>
											</div>
											<span class="iti__country-name">Израиль</span><span
												class="iti__dial-code">+972</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-in" role="option" data-dial-code="91"
											data-country-code="in">
											<div class="iti__flag-box">
												<div class="iti__flag iti__in"></div>
											</div>
											<span class="iti__country-name">Индия</span><span
												class="iti__dial-code">+91</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-id" role="option" data-dial-code="62"
											data-country-code="id">
											<div class="iti__flag-box">
												<div class="iti__flag iti__id"></div>
											</div>
											<span class="iti__country-name">Индонезия</span><span
												class="iti__dial-code">+62</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-jo" role="option" data-dial-code="962"
											data-country-code="jo">
											<div class="iti__flag-box">
												<div class="iti__flag iti__jo"></div>
											</div>
											<span class="iti__country-name">Иордания</span><span
												class="iti__dial-code">+962</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-iq" role="option" data-dial-code="964"
											data-country-code="iq">
											<div class="iti__flag-box">
												<div class="iti__flag iti__iq"></div>
											</div>
											<span class="iti__country-name">Ирак</span><span
												class="iti__dial-code">+964</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ir" role="option" data-dial-code="98"
											data-country-code="ir">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ir"></div>
											</div>
											<span class="iti__country-name">Иран</span><span
												class="iti__dial-code">+98</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ie" role="option" data-dial-code="353"
											data-country-code="ie">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ie"></div>
											</div>
											<span class="iti__country-name">Ирландия</span><span
												class="iti__dial-code">+353</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-is" role="option" data-dial-code="354"
											data-country-code="is">
											<div class="iti__flag-box">
												<div class="iti__flag iti__is"></div>
											</div>
											<span class="iti__country-name">Исландия</span><span
												class="iti__dial-code">+354</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-es" role="option" data-dial-code="34"
											data-country-code="es">
											<div class="iti__flag-box">
												<div class="iti__flag iti__es"></div>
											</div>
											<span class="iti__country-name">Испания</span><span
												class="iti__dial-code">+34</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-it" role="option" data-dial-code="39"
											data-country-code="it">
											<div class="iti__flag-box">
												<div class="iti__flag iti__it"></div>
											</div>
											<span class="iti__country-name">Италия</span><span
												class="iti__dial-code">+39</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ye" role="option" data-dial-code="967"
											data-country-code="ye">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ye"></div>
											</div>
											<span class="iti__country-name">Йемен</span><span
												class="iti__dial-code">+967</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cv" role="option" data-dial-code="238"
											data-country-code="cv">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cv"></div>
											</div>
											<span class="iti__country-name">Кабо-Верде</span><span
												class="iti__dial-code">+238</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-kz" role="option" data-dial-code="7"
											data-country-code="kz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kz"></div>
											</div>
											<span class="iti__country-name">Казахстан</span><span
												class="iti__dial-code">+7</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-kh" role="option" data-dial-code="855"
											data-country-code="kh">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kh"></div>
											</div>
											<span class="iti__country-name">Камбоджа</span><span
												class="iti__dial-code">+855</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cm" role="option" data-dial-code="237"
											data-country-code="cm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cm"></div>
											</div>
											<span class="iti__country-name">Камерун</span><span
												class="iti__dial-code">+237</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ca" role="option" data-dial-code="1"
											data-country-code="ca">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ca"></div>
											</div>
											<span class="iti__country-name">Канада</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-qa" role="option" data-dial-code="974"
											data-country-code="qa">
											<div class="iti__flag-box">
												<div class="iti__flag iti__qa"></div>
											</div>
											<span class="iti__country-name">Катар</span><span
												class="iti__dial-code">+974</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ke" role="option" data-dial-code="254"
											data-country-code="ke">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ke"></div>
											</div>
											<span class="iti__country-name">Кения</span><span
												class="iti__dial-code">+254</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cy" role="option" data-dial-code="357"
											data-country-code="cy">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cy"></div>
											</div>
											<span class="iti__country-name">Кипр</span><span
												class="iti__dial-code">+357</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-kg" role="option" data-dial-code="996"
											data-country-code="kg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kg"></div>
											</div>
											<span class="iti__country-name">Киргизия</span><span
												class="iti__dial-code">+996</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ki" role="option" data-dial-code="686"
											data-country-code="ki">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ki"></div>
											</div>
											<span class="iti__country-name">Кирибати</span><span
												class="iti__dial-code">+686</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cn" role="option" data-dial-code="86"
											data-country-code="cn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cn"></div>
											</div>
											<span class="iti__country-name">Китай</span><span
												class="iti__dial-code">+86</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cc" role="option" data-dial-code="61"
											data-country-code="cc">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cc"></div>
											</div>
											<span class="iti__country-name">Кокосовые (Килинг)
												острова</span><span class="iti__dial-code">+61</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-co" role="option" data-dial-code="57"
											data-country-code="co">
											<div class="iti__flag-box">
												<div class="iti__flag iti__co"></div>
											</div>
											<span class="iti__country-name">Колумбия</span><span
												class="iti__dial-code">+57</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-km" role="option" data-dial-code="269"
											data-country-code="km">
											<div class="iti__flag-box">
												<div class="iti__flag iti__km"></div>
											</div>
											<span class="iti__country-name">Коморы</span><span
												class="iti__dial-code">+269</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cg" role="option" data-dial-code="242"
											data-country-code="cg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cg"></div>
											</div>
											<span class="iti__country-name">Конго</span><span
												class="iti__dial-code">+242</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cd" role="option" data-dial-code="243"
											data-country-code="cd">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cd"></div>
											</div>
											<span class="iti__country-name">Конго, Демократическая
												Республика</span><span
												class="iti__dial-code">+243</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-kp" role="option" data-dial-code="850"
											data-country-code="kp">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kp"></div>
											</div>
											<span class="iti__country-name">Корея,
												Народно-Демократическая Республика</span><span
												class="iti__dial-code">+850</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-kr" role="option" data-dial-code="82"
											data-country-code="kr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kr"></div>
											</div>
											<span class="iti__country-name">Корея,
												Республика</span><span class="iti__dial-code">+82</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cr" role="option" data-dial-code="506"
											data-country-code="cr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cr"></div>
											</div>
											<span class="iti__country-name">Коста-рика</span><span
												class="iti__dial-code">+506</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ci" role="option" data-dial-code="225"
											data-country-code="ci">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ci"></div>
											</div>
											<span class="iti__country-name">Кот д`Ивуар</span><span
												class="iti__dial-code">+225</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cu" role="option" data-dial-code="53"
											data-country-code="cu">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cu"></div>
											</div>
											<span class="iti__country-name">Куба</span><span
												class="iti__dial-code">+53</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-kw" role="option" data-dial-code="965"
											data-country-code="kw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kw"></div>
											</div>
											<span class="iti__country-name">Кувейт</span><span
												class="iti__dial-code">+965</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cw" role="option" data-dial-code="599"
											data-country-code="cw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cw"></div>
											</div>
											<span class="iti__country-name">Кюрасао</span><span
												class="iti__dial-code">+599</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-la" role="option" data-dial-code="856"
											data-country-code="la">
											<div class="iti__flag-box">
												<div class="iti__flag iti__la"></div>
											</div>
											<span class="iti__country-name">Лаосская
												Народно-Демократическая Республика</span><span
												class="iti__dial-code">+856</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-lv" role="option" data-dial-code="371"
											data-country-code="lv">
											<div class="iti__flag-box">
												<div class="iti__flag iti__lv"></div>
											</div>
											<span class="iti__country-name">Латвия</span><span
												class="iti__dial-code">+371</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ls" role="option" data-dial-code="266"
											data-country-code="ls">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ls"></div>
											</div>
											<span class="iti__country-name">Лесото</span><span
												class="iti__dial-code">+266</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-lr" role="option" data-dial-code="231"
											data-country-code="lr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__lr"></div>
											</div>
											<span class="iti__country-name">Либерия</span><span
												class="iti__dial-code">+231</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-lb" role="option" data-dial-code="961"
											data-country-code="lb">
											<div class="iti__flag-box">
												<div class="iti__flag iti__lb"></div>
											</div>
											<span class="iti__country-name">Ливан</span><span
												class="iti__dial-code">+961</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ly" role="option" data-dial-code="218"
											data-country-code="ly">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ly"></div>
											</div>
											<span class="iti__country-name">Ливия</span><span
												class="iti__dial-code">+218</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-lt" role="option" data-dial-code="370"
											data-country-code="lt">
											<div class="iti__flag-box">
												<div class="iti__flag iti__lt"></div>
											</div>
											<span class="iti__country-name">Литва</span><span
												class="iti__dial-code">+370</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-li" role="option" data-dial-code="423"
											data-country-code="li">
											<div class="iti__flag-box">
												<div class="iti__flag iti__li"></div>
											</div>
											<span class="iti__country-name">Лихтенштейн</span><span
												class="iti__dial-code">+423</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-lu" role="option" data-dial-code="352"
											data-country-code="lu">
											<div class="iti__flag-box">
												<div class="iti__flag iti__lu"></div>
											</div>
											<span class="iti__country-name">Люксембург</span><span
												class="iti__dial-code">+352</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mu" role="option" data-dial-code="230"
											data-country-code="mu">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mu"></div>
											</div>
											<span class="iti__country-name">Маврикий</span><span
												class="iti__dial-code">+230</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mr" role="option" data-dial-code="222"
											data-country-code="mr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mr"></div>
											</div>
											<span class="iti__country-name">Мавритания</span><span
												class="iti__dial-code">+222</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mg" role="option" data-dial-code="261"
											data-country-code="mg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mg"></div>
											</div>
											<span class="iti__country-name">Мадагаскар</span><span
												class="iti__dial-code">+261</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-yt" role="option" data-dial-code="262"
											data-country-code="yt">
											<div class="iti__flag-box">
												<div class="iti__flag iti__yt"></div>
											</div>
											<span class="iti__country-name">Майотта</span><span
												class="iti__dial-code">+262</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mo" role="option" data-dial-code="853"
											data-country-code="mo">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mo"></div>
											</div>
											<span class="iti__country-name">Макао</span><span
												class="iti__dial-code">+853</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mw" role="option" data-dial-code="265"
											data-country-code="mw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mw"></div>
											</div>
											<span class="iti__country-name">Малави</span><span
												class="iti__dial-code">+265</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-my" role="option" data-dial-code="60"
											data-country-code="my">
											<div class="iti__flag-box">
												<div class="iti__flag iti__my"></div>
											</div>
											<span class="iti__country-name">Малайзия</span><span
												class="iti__dial-code">+60</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ml" role="option" data-dial-code="223"
											data-country-code="ml">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ml"></div>
											</div>
											<span class="iti__country-name">Мали</span><span
												class="iti__dial-code">+223</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mv" role="option" data-dial-code="960"
											data-country-code="mv">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mv"></div>
											</div>
											<span class="iti__country-name">Мальдивы</span><span
												class="iti__dial-code">+960</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mt" role="option" data-dial-code="356"
											data-country-code="mt">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mt"></div>
											</div>
											<span class="iti__country-name">Мальта</span><span
												class="iti__dial-code">+356</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ma" role="option" data-dial-code="212"
											data-country-code="ma">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ma"></div>
											</div>
											<span class="iti__country-name">Марокко</span><span
												class="iti__dial-code">+212</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mq" role="option" data-dial-code="596"
											data-country-code="mq">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mq"></div>
											</div>
											<span class="iti__country-name">Мартиника</span><span
												class="iti__dial-code">+596</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mh" role="option" data-dial-code="692"
											data-country-code="mh">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mh"></div>
											</div>
											<span class="iti__country-name">Маршалловы
												Острова</span><span class="iti__dial-code">+692</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mx" role="option" data-dial-code="52"
											data-country-code="mx">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mx"></div>
											</div>
											<span class="iti__country-name">Мексика</span><span
												class="iti__dial-code">+52</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-fm" role="option" data-dial-code="691"
											data-country-code="fm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__fm"></div>
											</div>
											<span class="iti__country-name">Микронезия, Федеративные
												Штаты</span><span class="iti__dial-code">+691</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mz" role="option" data-dial-code="258"
											data-country-code="mz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mz"></div>
											</div>
											<span class="iti__country-name">Мозамбик</span><span
												class="iti__dial-code">+258</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-md" role="option" data-dial-code="373"
											data-country-code="md">
											<div class="iti__flag-box">
												<div class="iti__flag iti__md"></div>
											</div>
											<span class="iti__country-name">Молдова</span><span
												class="iti__dial-code">+373</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mc" role="option" data-dial-code="377"
											data-country-code="mc">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mc"></div>
											</div>
											<span class="iti__country-name">Монако</span><span
												class="iti__dial-code">+377</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mn" role="option" data-dial-code="976"
											data-country-code="mn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mn"></div>
											</div>
											<span class="iti__country-name">Монголия</span><span
												class="iti__dial-code">+976</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ms" role="option" data-dial-code="1"
											data-country-code="ms">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ms"></div>
											</div>
											<span class="iti__country-name">Монтсеррат</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mm" role="option" data-dial-code="95"
											data-country-code="mm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mm"></div>
											</div>
											<span class="iti__country-name">Мьянма</span><span
												class="iti__dial-code">+95</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-na" role="option" data-dial-code="264"
											data-country-code="na">
											<div class="iti__flag-box">
												<div class="iti__flag iti__na"></div>
											</div>
											<span class="iti__country-name">Намибия</span><span
												class="iti__dial-code">+264</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-nr" role="option" data-dial-code="674"
											data-country-code="nr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__nr"></div>
											</div>
											<span class="iti__country-name">Науру</span><span
												class="iti__dial-code">+674</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-np" role="option" data-dial-code="977"
											data-country-code="np">
											<div class="iti__flag-box">
												<div class="iti__flag iti__np"></div>
											</div>
											<span class="iti__country-name">Непал</span><span
												class="iti__dial-code">+977</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ne" role="option" data-dial-code="227"
											data-country-code="ne">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ne"></div>
											</div>
											<span class="iti__country-name">Нигер</span><span
												class="iti__dial-code">+227</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ng" role="option" data-dial-code="234"
											data-country-code="ng">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ng"></div>
											</div>
											<span class="iti__country-name">Нигерия</span><span
												class="iti__dial-code">+234</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-nl" role="option" data-dial-code="31"
											data-country-code="nl">
											<div class="iti__flag-box">
												<div class="iti__flag iti__nl"></div>
											</div>
											<span class="iti__country-name">Нидерланды</span><span
												class="iti__dial-code">+31</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ni" role="option" data-dial-code="505"
											data-country-code="ni">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ni"></div>
											</div>
											<span class="iti__country-name">Никарагуа</span><span
												class="iti__dial-code">+505</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-nu" role="option" data-dial-code="683"
											data-country-code="nu">
											<div class="iti__flag-box">
												<div class="iti__flag iti__nu"></div>
											</div>
											<span class="iti__country-name">Ниуэ</span><span
												class="iti__dial-code">+683</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-nz" role="option" data-dial-code="64"
											data-country-code="nz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__nz"></div>
											</div>
											<span class="iti__country-name">Новая Зеландия</span><span
												class="iti__dial-code">+64</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-nc" role="option" data-dial-code="687"
											data-country-code="nc">
											<div class="iti__flag-box">
												<div class="iti__flag iti__nc"></div>
											</div>
											<span class="iti__country-name">Новая Каледония</span><span
												class="iti__dial-code">+687</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-no" role="option" data-dial-code="47"
											data-country-code="no">
											<div class="iti__flag-box">
												<div class="iti__flag iti__no"></div>
											</div>
											<span class="iti__country-name">Норвегия</span><span
												class="iti__dial-code">+47</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ae" role="option" data-dial-code="971"
											data-country-code="ae">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ae"></div>
											</div>
											<span class="iti__country-name">Объединенные Арабские
												Эмираты</span><span class="iti__dial-code">+971</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-om" role="option" data-dial-code="968"
											data-country-code="om">
											<div class="iti__flag-box">
												<div class="iti__flag iti__om"></div>
											</div>
											<span class="iti__country-name">Оман</span><span
												class="iti__dial-code">+968</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-im" role="option" data-dial-code="44"
											data-country-code="im">
											<div class="iti__flag-box">
												<div class="iti__flag iti__im"></div>
											</div>
											<span class="iti__country-name">Остров Мэн</span><span
												class="iti__dial-code">+44</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-nf" role="option" data-dial-code="672"
											data-country-code="nf">
											<div class="iti__flag-box">
												<div class="iti__flag iti__nf"></div>
											</div>
											<span class="iti__country-name">Остров Норфолк</span><span
												class="iti__dial-code">+672</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cx" role="option" data-dial-code="61"
											data-country-code="cx">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cx"></div>
											</div>
											<span class="iti__country-name">Остров Рождества</span><span
												class="iti__dial-code">+61</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ky" role="option" data-dial-code="1"
											data-country-code="ky">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ky"></div>
											</div>
											<span class="iti__country-name">Острова Кайман</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ck" role="option" data-dial-code="682"
											data-country-code="ck">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ck"></div>
											</div>
											<span class="iti__country-name">Острова Кука</span><span
												class="iti__dial-code">+682</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tc" role="option" data-dial-code="1"
											data-country-code="tc">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tc"></div>
											</div>
											<span class="iti__country-name">Острова Теркс и
												Кайкос</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pk" role="option" data-dial-code="92"
											data-country-code="pk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pk"></div>
											</div>
											<span class="iti__country-name">Пакистан</span><span
												class="iti__dial-code">+92</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pw" role="option" data-dial-code="680"
											data-country-code="pw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pw"></div>
											</div>
											<span class="iti__country-name">Палау</span><span
												class="iti__dial-code">+680</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ps" role="option" data-dial-code="970"
											data-country-code="ps">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ps"></div>
											</div>
											<span class="iti__country-name">Палестина,
												Государство</span><span
												class="iti__dial-code">+970</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pa" role="option" data-dial-code="507"
											data-country-code="pa">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pa"></div>
											</div>
											<span class="iti__country-name">Панама</span><span
												class="iti__dial-code">+507</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-va" role="option" data-dial-code="39"
											data-country-code="va">
											<div class="iti__flag-box">
												<div class="iti__flag iti__va"></div>
											</div>
											<span class="iti__country-name">Папский Престол
												(Государство-город Ватикан)</span><span
												class="iti__dial-code">+39</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pg" role="option" data-dial-code="675"
											data-country-code="pg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pg"></div>
											</div>
											<span class="iti__country-name">Папуа Новая
												Гвинея</span><span class="iti__dial-code">+675</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-py" role="option" data-dial-code="595"
											data-country-code="py">
											<div class="iti__flag-box">
												<div class="iti__flag iti__py"></div>
											</div>
											<span class="iti__country-name">Парагвай</span><span
												class="iti__dial-code">+595</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pe" role="option" data-dial-code="51"
											data-country-code="pe">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pe"></div>
											</div>
											<span class="iti__country-name">Перу</span><span
												class="iti__dial-code">+51</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pl" role="option" data-dial-code="48"
											data-country-code="pl">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pl"></div>
											</div>
											<span class="iti__country-name">Польша</span><span
												class="iti__dial-code">+48</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pt" role="option" data-dial-code="351"
											data-country-code="pt">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pt"></div>
											</div>
											<span class="iti__country-name">Португалия</span><span
												class="iti__dial-code">+351</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pr" role="option" data-dial-code="1"
											data-country-code="pr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pr"></div>
											</div>
											<span class="iti__country-name">Пуэрто-Рико</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-xk" role="option" data-dial-code="383"
											data-country-code="xk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__xk"></div>
											</div>
											<span class="iti__country-name">Республика
												Косово</span><span class="iti__dial-code">+383</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-re" role="option" data-dial-code="262"
											data-country-code="re">
											<div class="iti__flag-box">
												<div class="iti__flag iti__re"></div>
											</div>
											<span class="iti__country-name">Реюньон</span><span
												class="iti__dial-code">+262</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ru" role="option" data-dial-code="7"
											data-country-code="ru">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ru"></div>
											</div>
											<span class="iti__country-name">Россия</span><span
												class="iti__dial-code">+7</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ro" role="option" data-dial-code="40"
											data-country-code="ro">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ro"></div>
											</div>
											<span class="iti__country-name">Румыния</span><span
												class="iti__dial-code">+40</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ws" role="option" data-dial-code="685"
											data-country-code="ws">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ws"></div>
											</div>
											<span class="iti__country-name">Самоа</span><span
												class="iti__dial-code">+685</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sm" role="option" data-dial-code="378"
											data-country-code="sm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sm"></div>
											</div>
											<span class="iti__country-name">Сан-Марино</span><span
												class="iti__dial-code">+378</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-st" role="option" data-dial-code="239"
											data-country-code="st">
											<div class="iti__flag-box">
												<div class="iti__flag iti__st"></div>
											</div>
											<span class="iti__country-name">Сан-Томе и
												Принсипи</span><span class="iti__dial-code">+239</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sa" role="option" data-dial-code="966"
											data-country-code="sa">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sa"></div>
											</div>
											<span class="iti__country-name">Саудовская
												Аравия</span><span class="iti__dial-code">+966</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-wo" role="option" data-dial-code="0"
											data-country-code="wo">
											<div class="iti__flag-box">
												<div class="iti__flag iti__wo"></div>
											</div>
											<span class="iti__country-name">Свободный ввод</span><span
												class="iti__dial-code">+0</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sh" role="option" data-dial-code="290"
											data-country-code="sh">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sh"></div>
											</div>
											<span class="iti__country-name">Святая Елена, Остров
												Вознесения, Тристан-да-Кунья</span><span
												class="iti__dial-code">+290</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mk" role="option" data-dial-code="389"
											data-country-code="mk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mk"></div>
											</div>
											<span class="iti__country-name">Северная
												Македония</span><span class="iti__dial-code">+389</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mp" role="option" data-dial-code="1"
											data-country-code="mp">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mp"></div>
											</div>
											<span class="iti__country-name">Северные Марианские
												Острова</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sc" role="option" data-dial-code="248"
											data-country-code="sc">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sc"></div>
											</div>
											<span class="iti__country-name">Сейшелы</span><span
												class="iti__dial-code">+248</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-bl" role="option" data-dial-code="590"
											data-country-code="bl">
											<div class="iti__flag-box">
												<div class="iti__flag iti__bl"></div>
											</div>
											<span class="iti__country-name">Сен-Бартелеми</span><span
												class="iti__dial-code">+590</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sx" role="option" data-dial-code="1"
											data-country-code="sx">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sx"></div>
											</div>
											<span class="iti__country-name">Сен-Мартен (нидерландская
												часть)</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-mf" role="option" data-dial-code="590"
											data-country-code="mf">
											<div class="iti__flag-box">
												<div class="iti__flag iti__mf"></div>
											</div>
											<span class="iti__country-name">Сен-Мартен (французская
												часть)</span><span class="iti__dial-code">+590</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sn" role="option" data-dial-code="221"
											data-country-code="sn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sn"></div>
											</div>
											<span class="iti__country-name">Сенегал</span><span
												class="iti__dial-code">+221</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-vc" role="option" data-dial-code="1"
											data-country-code="vc">
											<div class="iti__flag-box">
												<div class="iti__flag iti__vc"></div>
											</div>
											<span class="iti__country-name">Сент-Винсент и
												Гренадины</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-kn" role="option" data-dial-code="1"
											data-country-code="kn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__kn"></div>
											</div>
											<span class="iti__country-name">Сент-Китс и
												Невис</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-lc" role="option" data-dial-code="1"
											data-country-code="lc">
											<div class="iti__flag-box">
												<div class="iti__flag iti__lc"></div>
											</div>
											<span class="iti__country-name">Сент-Люсия</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pm" role="option" data-dial-code="508"
											data-country-code="pm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pm"></div>
											</div>
											<span class="iti__country-name">Сент-Пьер и
												Микелон</span><span class="iti__dial-code">+508</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-rs" role="option" data-dial-code="381"
											data-country-code="rs">
											<div class="iti__flag-box">
												<div class="iti__flag iti__rs"></div>
											</div>
											<span class="iti__country-name">Сербия</span><span
												class="iti__dial-code">+381</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sg" role="option" data-dial-code="65"
											data-country-code="sg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sg"></div>
											</div>
											<span class="iti__country-name">Сингапур</span><span
												class="iti__dial-code">+65</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sy" role="option" data-dial-code="963"
											data-country-code="sy">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sy"></div>
											</div>
											<span class="iti__country-name">Сирийская Арабская
												Республика</span><span
												class="iti__dial-code">+963</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sk" role="option" data-dial-code="421"
											data-country-code="sk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sk"></div>
											</div>
											<span class="iti__country-name">Словакия</span><span
												class="iti__dial-code">+421</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-si" role="option" data-dial-code="386"
											data-country-code="si">
											<div class="iti__flag-box">
												<div class="iti__flag iti__si"></div>
											</div>
											<span class="iti__country-name">Словения</span><span
												class="iti__dial-code">+386</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gb" role="option" data-dial-code="44"
											data-country-code="gb">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gb"></div>
											</div>
											<span class="iti__country-name">Соединенное
												Королевство</span><span
												class="iti__dial-code">+44</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-us" role="option" data-dial-code="1"
											data-country-code="us">
											<div class="iti__flag-box">
												<div class="iti__flag iti__us"></div>
											</div>
											<span class="iti__country-name">Соединенные
												Штаты</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sb" role="option" data-dial-code="677"
											data-country-code="sb">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sb"></div>
											</div>
											<span class="iti__country-name">Соломоновы
												Острова</span><span class="iti__dial-code">+677</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-so" role="option" data-dial-code="252"
											data-country-code="so">
											<div class="iti__flag-box">
												<div class="iti__flag iti__so"></div>
											</div>
											<span class="iti__country-name">Сомали</span><span
												class="iti__dial-code">+252</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sd" role="option" data-dial-code="249"
											data-country-code="sd">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sd"></div>
											</div>
											<span class="iti__country-name">Судан</span><span
												class="iti__dial-code">+249</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sr" role="option" data-dial-code="597"
											data-country-code="sr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sr"></div>
											</div>
											<span class="iti__country-name">Суринам</span><span
												class="iti__dial-code">+597</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sl" role="option" data-dial-code="232"
											data-country-code="sl">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sl"></div>
											</div>
											<span class="iti__country-name">Сьерра-Леоне</span><span
												class="iti__dial-code">+232</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tj" role="option" data-dial-code="992"
											data-country-code="tj">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tj"></div>
											</div>
											<span class="iti__country-name">Таджикистан</span><span
												class="iti__dial-code">+992</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-th" role="option" data-dial-code="66"
											data-country-code="th">
											<div class="iti__flag-box">
												<div class="iti__flag iti__th"></div>
											</div>
											<span class="iti__country-name">Таиланд</span><span
												class="iti__dial-code">+66</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tw" role="option" data-dial-code="886"
											data-country-code="tw">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tw"></div>
											</div>
											<span class="iti__country-name">Тайвань (Китай)</span><span
												class="iti__dial-code">+886</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tz" role="option" data-dial-code="255"
											data-country-code="tz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tz"></div>
											</div>
											<span class="iti__country-name">Танзания, Объединенная
												Республика</span><span
												class="iti__dial-code">+255</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tl" role="option" data-dial-code="670"
											data-country-code="tl">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tl"></div>
											</div>
											<span class="iti__country-name">Тимор-Лесте</span><span
												class="iti__dial-code">+670</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tg" role="option" data-dial-code="228"
											data-country-code="tg">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tg"></div>
											</div>
											<span class="iti__country-name">Того</span><span
												class="iti__dial-code">+228</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tk" role="option" data-dial-code="690"
											data-country-code="tk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tk"></div>
											</div>
											<span class="iti__country-name">Токелау</span><span
												class="iti__dial-code">+690</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-to" role="option" data-dial-code="676"
											data-country-code="to">
											<div class="iti__flag-box">
												<div class="iti__flag iti__to"></div>
											</div>
											<span class="iti__country-name">Тонга</span><span
												class="iti__dial-code">+676</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tt" role="option" data-dial-code="1"
											data-country-code="tt">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tt"></div>
											</div>
											<span class="iti__country-name">Тринидад и
												Тобаго</span><span class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tv" role="option" data-dial-code="688"
											data-country-code="tv">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tv"></div>
											</div>
											<span class="iti__country-name">Тувалу</span><span
												class="iti__dial-code">+688</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tn" role="option" data-dial-code="216"
											data-country-code="tn">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tn"></div>
											</div>
											<span class="iti__country-name">Тунис</span><span
												class="iti__dial-code">+216</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tm" role="option" data-dial-code="993"
											data-country-code="tm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tm"></div>
											</div>
											<span class="iti__country-name">Туркменистан</span><span
												class="iti__dial-code">+993</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-tr" role="option" data-dial-code="90"
											data-country-code="tr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__tr"></div>
											</div>
											<span class="iti__country-name">Турция</span><span
												class="iti__dial-code">+90</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ug" role="option" data-dial-code="256"
											data-country-code="ug">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ug"></div>
											</div>
											<span class="iti__country-name">Уганда</span><span
												class="iti__dial-code">+256</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-uz" role="option" data-dial-code="998"
											data-country-code="uz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__uz"></div>
											</div>
											<span class="iti__country-name">Узбекистан</span><span
												class="iti__dial-code">+998</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ua" role="option" data-dial-code="380"
											data-country-code="ua">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ua"></div>
											</div>
											<span class="iti__country-name">Украина</span><span
												class="iti__dial-code">+380</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-wf" role="option" data-dial-code="681"
											data-country-code="wf">
											<div class="iti__flag-box">
												<div class="iti__flag iti__wf"></div>
											</div>
											<span class="iti__country-name">Уоллис и Футуна</span><span
												class="iti__dial-code">+681</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-uy" role="option" data-dial-code="598"
											data-country-code="uy">
											<div class="iti__flag-box">
												<div class="iti__flag iti__uy"></div>
											</div>
											<span class="iti__country-name">Уругвай</span><span
												class="iti__dial-code">+598</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-fo" role="option" data-dial-code="298"
											data-country-code="fo">
											<div class="iti__flag-box">
												<div class="iti__flag iti__fo"></div>
											</div>
											<span class="iti__country-name">Фарерские
												Острова</span><span class="iti__dial-code">+298</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-fj" role="option" data-dial-code="679"
											data-country-code="fj">
											<div class="iti__flag-box">
												<div class="iti__flag iti__fj"></div>
											</div>
											<span class="iti__country-name">Фиджи</span><span
												class="iti__dial-code">+679</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ph" role="option" data-dial-code="63"
											data-country-code="ph">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ph"></div>
											</div>
											<span class="iti__country-name">Филиппины</span><span
												class="iti__dial-code">+63</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-fi" role="option" data-dial-code="358"
											data-country-code="fi">
											<div class="iti__flag-box">
												<div class="iti__flag iti__fi"></div>
											</div>
											<span class="iti__country-name">Финляндия</span><span
												class="iti__dial-code">+358</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-fk" role="option" data-dial-code="500"
											data-country-code="fk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__fk"></div>
											</div>
											<span class="iti__country-name">Фолклендские Острова
												(Мальвинские)</span><span
												class="iti__dial-code">+500</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-fr" role="option" data-dial-code="33"
											data-country-code="fr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__fr"></div>
											</div>
											<span class="iti__country-name">Франция</span><span
												class="iti__dial-code">+33</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gf" role="option" data-dial-code="594"
											data-country-code="gf">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gf"></div>
											</div>
											<span class="iti__country-name">Французская
												Гвиана</span><span class="iti__dial-code">+594</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-pf" role="option" data-dial-code="689"
											data-country-code="pf">
											<div class="iti__flag-box">
												<div class="iti__flag iti__pf"></div>
											</div>
											<span class="iti__country-name">Французская
												Полинезия</span><span class="iti__dial-code">+689</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-hr" role="option" data-dial-code="385"
											data-country-code="hr">
											<div class="iti__flag-box">
												<div class="iti__flag iti__hr"></div>
											</div>
											<span class="iti__country-name">Хорватия</span><span
												class="iti__dial-code">+385</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cf" role="option" data-dial-code="236"
											data-country-code="cf">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cf"></div>
											</div>
											<span class="iti__country-name">Центрально-Африканская
												Республика</span><span
												class="iti__dial-code">+236</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-td" role="option" data-dial-code="235"
											data-country-code="td">
											<div class="iti__flag-box">
												<div class="iti__flag iti__td"></div>
											</div>
											<span class="iti__country-name">Чад</span><span
												class="iti__dial-code">+235</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-me" role="option" data-dial-code="382"
											data-country-code="me">
											<div class="iti__flag-box">
												<div class="iti__flag iti__me"></div>
											</div>
											<span class="iti__country-name">Черногория</span><span
												class="iti__dial-code">+382</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cz" role="option" data-dial-code="420"
											data-country-code="cz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cz"></div>
											</div>
											<span class="iti__country-name">Чехия</span><span
												class="iti__dial-code">+420</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-cl" role="option" data-dial-code="56"
											data-country-code="cl">
											<div class="iti__flag-box">
												<div class="iti__flag iti__cl"></div>
											</div>
											<span class="iti__country-name">Чили</span><span
												class="iti__dial-code">+56</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ch" role="option" data-dial-code="41"
											data-country-code="ch">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ch"></div>
											</div>
											<span class="iti__country-name">Швейцария</span><span
												class="iti__dial-code">+41</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-se" role="option" data-dial-code="46"
											data-country-code="se">
											<div class="iti__flag-box">
												<div class="iti__flag iti__se"></div>
											</div>
											<span class="iti__country-name">Швеция</span><span
												class="iti__dial-code">+46</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sj" role="option" data-dial-code="47"
											data-country-code="sj">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sj"></div>
											</div>
											<span class="iti__country-name">Шпицберген и Ян
												Майен</span><span class="iti__dial-code">+47</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-lk" role="option" data-dial-code="94"
											data-country-code="lk">
											<div class="iti__flag-box">
												<div class="iti__flag iti__lk"></div>
											</div>
											<span class="iti__country-name">Шри-Ланка</span><span
												class="iti__dial-code">+94</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ec" role="option" data-dial-code="593"
											data-country-code="ec">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ec"></div>
											</div>
											<span class="iti__country-name">Эквадор</span><span
												class="iti__dial-code">+593</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-gq" role="option" data-dial-code="240"
											data-country-code="gq">
											<div class="iti__flag-box">
												<div class="iti__flag iti__gq"></div>
											</div>
											<span class="iti__country-name">Экваториальная
												Гвинея</span><span class="iti__dial-code">+240</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ax" role="option" data-dial-code="358"
											data-country-code="ax">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ax"></div>
											</div>
											<span class="iti__country-name">Эландские
												Острова</span><span class="iti__dial-code">+358</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sv" role="option" data-dial-code="503"
											data-country-code="sv">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sv"></div>
											</div>
											<span class="iti__country-name">Эль-Сальвадор</span><span
												class="iti__dial-code">+503</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-er" role="option" data-dial-code="291"
											data-country-code="er">
											<div class="iti__flag-box">
												<div class="iti__flag iti__er"></div>
											</div>
											<span class="iti__country-name">Эритрея</span><span
												class="iti__dial-code">+291</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-sz" role="option" data-dial-code="268"
											data-country-code="sz">
											<div class="iti__flag-box">
												<div class="iti__flag iti__sz"></div>
											</div>
											<span class="iti__country-name">Эсватини</span><span
												class="iti__dial-code">+268</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ee" role="option" data-dial-code="372"
											data-country-code="ee">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ee"></div>
											</div>
											<span class="iti__country-name">Эстония</span><span
												class="iti__dial-code">+372</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-et" role="option" data-dial-code="251"
											data-country-code="et">
											<div class="iti__flag-box">
												<div class="iti__flag iti__et"></div>
											</div>
											<span class="iti__country-name">Эфиопия</span><span
												class="iti__dial-code">+251</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-za" role="option" data-dial-code="27"
											data-country-code="za">
											<div class="iti__flag-box">
												<div class="iti__flag iti__za"></div>
											</div>
											<span class="iti__country-name">Южная Африка</span><span
												class="iti__dial-code">+27</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-ss" role="option" data-dial-code="211"
											data-country-code="ss">
											<div class="iti__flag-box">
												<div class="iti__flag iti__ss"></div>
											</div>
											<span class="iti__country-name">Южный Судан</span><span
												class="iti__dial-code">+211</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-jm" role="option" data-dial-code="1"
											data-country-code="jm">
											<div class="iti__flag-box">
												<div class="iti__flag iti__jm"></div>
											</div>
											<span class="iti__country-name">Ямайка</span><span
												class="iti__dial-code">+1</span>
										</li>
										<li class="iti__country iti__standard" tabindex="-1"
											id="iti-item-jp" role="option" data-dial-code="81"
											data-country-code="jp">
											<div class="iti__flag-box">
												<div class="iti__flag iti__jp"></div>
											</div>
											<span class="iti__country-name">Япония</span><span
												class="iti__dial-code">+81</span>
										</li>
									</ul>
								</div>
								<input placeholder="+7 ___ ___-__-__" name="ORDER_PROP_3"
									class="k-input" inputmode="tel" autocomplete="tel"
									data-intl-tel-input-id="0" style="padding-left: 51px;">
							</div>
						</div>
					</div>
					<div class="checkout-left-delivery">
						<div class="checkout-left-delivery-title">Доставка:</div>
						<div class="checkout-left-delivery-container">
							<div class="checkout-left-delivery-el" index="0"><input name="DELIVERY_ID"
									id="delivery9" type="radio" class="k-checkbox" value="9">
								<label for="delivery9" class="checkout-left-delivery-el-text">
									<div class="checkout-left-delivery-el-text-title">Почта России
										<span class="checkout-left-delivery-el-text-subtitle">
											<span class="address">Почта России – 450 рублей (бесплатно для заказов от 8000 рублей)</span>
										</span>
									</div>
									<div data-code="0" class="checkout-left-grid">
										<div class="k-input-wrapper">
											<input placeholder="Индекс*" name="ORDER_PROP_1"class="k-input">
										</div>
										<div class="k-input-wrapper">
											<input placeholder="Индекс*" name="ORDER_PROP_2"class="k-input">
										</div>
										<div class="k-input-wrapper">
											<input placeholder="Улица, дом, квартира*" name="ORDER_PROP_2"class="k-input">
										</div>
									</div>
								</label>
							</div>
							<div class="checkout-left-delivery-el" index="1">
								<input name="DELIVERY_ID" id="delivery5" type="radio" class="k-checkbox" value="5">
								<label for="delivery5" class="checkout-left-delivery-el-text">
									<div class="checkout-left-delivery-el-text-title">Самовывоз</div>
									<div class="checkout-left-delivery-el-text-subtitle">
										<span class="address">Россия, Камчатский край, Петропавловск-Камчатский, Советская улица, 48</span>
										<div style="display: none;">
											<section class="ymap-container" id="map_1"
												style="width: 400px; height: 400px;">
												<div id="yandexMap23948"
													style="width: 100%; height: 100%;">
													<ymaps class="ymaps-2-1-79-map"
														style="width: 0px; height: 0px;">
														<ymaps
															class="ymaps-2-1-79-map ymaps-2-1-79-i-ua_js_yes ymaps-2-1-79-map-bg ymaps-2-1-79-islets_map-lang-ru"
															style="width: 0px; height: 0px;">
															<ymaps class="ymaps-2-1-79-inner-panes">
																<ymaps
																	class="ymaps-2-1-79-events-pane ymaps-2-1-79-user-selection-none"
																	unselectable="on"
																	style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 3000; cursor: url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.79/build/release/images/cursor/grab.cur&quot;), move;">
																</ymaps>
																<ymaps class="ymaps-2-1-79-ground-pane"
																	style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 601;">
																	<ymaps
																		style="z-index: 150; position: absolute;">
																		<canvas height="512" width="512"
																			style="position: absolute; width: 256px; height: 256px; left: -128px; top: -128px;"></canvas>
																	</ymaps>
																</ymaps>
																<ymaps
																	class="ymaps-2-1-79-copyrights-pane"
																	style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 6002;">
																	<ymaps>
																		<ymaps
																			class="ymaps-2-1-79-copyright ymaps-2-1-79-copyright_logo_no ymaps-2-1-79-copyright_fog_yes"
																			style="">
																			<ymaps
																				class="ymaps-2-1-79-copyright__fog">
																				…
																			</ymaps>
																			<ymaps
																				class="ymaps-2-1-79-copyright__wrap">
																				<ymaps
																					class="ymaps-2-1-79-copyright__layout">
																					<ymaps
																						class="ymaps-2-1-79-copyright__content-cell">
																						<ymaps
																							class="ymaps-2-1-79-copyright__content">
																							<ymaps
																								class="ymaps-2-1-79-copyright__text">
																								© Яндекс
																							</ymaps>
																							<ymaps
																								class="ymaps-2-1-79-copyright__agreement">
																								&nbsp;<a
																									class="ymaps-2-1-79-copyright__link"
																									target="_blank"
																									href="https://yandex.ru/legal/maps_termsofuse/?lang=ru"
																									rel="noopener">Условия</a>
																							</ymaps>
																						</ymaps>
																					</ymaps>
																					<ymaps
																						class="ymaps-2-1-79-copyright__logo-cell">
																						<a class="ymaps-2-1-79-copyright__logo"
																							href=""
																							target="_blank"></a>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																		</ymaps>
																	</ymaps>
																	<ymaps
																		class="ymaps-2-1-79-map-copyrights-promo">
																		<ymaps>
																			<ymaps
																				class="ymaps-2-1-79-gotoymaps"
																				title="Как добраться"
																				style="display: none;">
																				<ymaps
																					class="ymaps-2-1-79-gotoymaps__container">
																					<ymaps
																						class="ymaps-2-1-79-gotoymaps__pin">
																					</ymaps>
																					<ymaps
																						class="ymaps-2-1-79-gotoymaps__text-container"
																						style="display: none;">
																						<ymaps
																							class="ymaps-2-1-79-gotoymaps__text">
																							В Карты →
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																			<ymaps
																				class="ymaps-2-1-79-gototaxi"
																				title="Доехать на такси"
																				style="display: none;">
																				<ymaps
																					class="ymaps-2-1-79-gototaxi__container">
																					<ymaps
																						class="ymaps-2-1-79-gototaxi__pin">
																					</ymaps>
																					<ymaps
																						class="ymaps-2-1-79-gototaxi__text-container">
																						<ymaps
																							class="ymaps-2-1-79-gototaxi__text">
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																			<a class="ymaps-2-1-79-gototech"
																				target="_blank"
																				href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps "
																				style="display: none;">API</a>
																		</ymaps>
																	</ymaps>
																</ymaps>
																<ymaps
																	class="ymaps-2-1-79-controls-pane"
																	style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 5403;">
																	<ymaps
																		class="ymaps-2-1-79-controls__toolbar"
																		style="margin-top: 10px;">
																		<ymaps
																			class="ymaps-2-1-79-controls__toolbar_left">
																			<ymaps
																				class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none"
																				unselectable="on"
																				style="margin-right: 0px; margin-left: 10px; position: inherit;">
																				<ymaps>
																					<ymaps
																						class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text"
																						style="max-width: 90px"
																						title="Определить ваше местоположение">
																						<ymaps
																							class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_geolocation">
																						</ymaps>
																						<ymaps
																							class="ymaps-2-1-79-float-button-text">
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																			<ymaps
																				class="ymaps-2-1-79-controls__control_toolbar"
																				style="margin-right: 0px; margin-left: 10px; position: inherit;">
																				<ymaps>
																					<ymaps
																						class="ymaps-2-1-79-searchbox">
																						<ymaps
																							id="id_168719650183891806330"
																							unselectable="on"
																							class="ymaps-2-1-79-user-selection-none">
																							<ymaps>
																								<ymaps
																									class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text"
																									style="max-width: 30px"
																									title="Найти">
																									<ymaps
																										class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_magnifier">
																									</ymaps>
																									<ymaps
																										class="ymaps-2-1-79-float-button-text">
																										Найти
																									</ymaps>
																								</ymaps>
																							</ymaps>
																						</ymaps>
																						<ymaps
																							id="id_168719650183891806331">
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																		</ymaps>
																		<ymaps
																			class="ymaps-2-1-79-controls__toolbar_right">
																			<ymaps
																				class="ymaps-2-1-79-controls__control_toolbar"
																				style="margin-right: 10px; margin-left: 0px; position: inherit;">
																				<ymaps>
																					<ymaps
																						class="ymaps-2-1-79-traffic">
																						<ymaps
																							id="id_168719650183891806340"
																							unselectable="on"
																							class="ymaps-2-1-79-user-selection-none">
																							<ymaps>
																								<ymaps
																									class="ymaps-2-1-79-float-button ymaps-2-1-79-float-button_traffic_left ymaps-2-1-79-_hidden-text">
																									<ymaps
																										class="ymaps-2-1-79-traffic__icon ymaps-2-1-79-traffic__icon_icon_off ymaps-2-1-79-float-button-icon">
																									</ymaps>
																									<ymaps
																										class="ymaps-2-1-79-float-button-text">
																										<ymaps>
																											Пробки
																										</ymaps>
																									</ymaps>
																								</ymaps>
																							</ymaps>
																							<ymaps>
																							</ymaps>
																						</ymaps>
																						<ymaps
																							id="id_168719650183891806341">
																							<ymaps>
																								<ymaps
																									class="ymaps-2-1-79-traffic__panel ymaps-2-1-79-popup ymaps-2-1-79-popup_direction_down ymaps-2-1-79-popup_to_bottom ymaps-2-1-79-popup_theme_ffffff ymaps-2-1-79-user-selection-none"
																									unselectable="on"
																									style="width: 270px;">
																									<ymaps
																										class="ymaps-2-1-79-traffic__tail ymaps-2-1-79-popup__tail">
																									</ymaps>
																									<ymaps
																										class="ymaps-2-1-79-traffic__panel-content">
																										<ymaps
																											id="id_168719650183891806342">
																											<ymaps>
																												<ymaps
																													class="ymaps-2-1-79-traffic__switcher">
																													<ymaps
																														class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_actual ymaps-2-1-79-traffic__switcher-item_selected_yes">
																														Сейчас
																													</ymaps>
																													<ymaps
																														class="ymaps-2-1-79-traffic__switcher-item ymaps-2-1-79-traffic__switcher-item_data_archive">
																														Статистика
																													</ymaps>
																												</ymaps>
																											</ymaps>
																										</ymaps>
																										<ymaps>
																										</ymaps>
																										<ymaps>
																										</ymaps>
																										<ymaps>
																										</ymaps>
																									</ymaps>
																								</ymaps>
																							</ymaps>
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																			<ymaps
																				class="ymaps-2-1-79-controls__control_toolbar"
																				style="margin-right: 10px; margin-left: 0px; position: inherit;">
																				<ymaps>
																					<ymaps
																						class="ymaps-2-1-79-listbox ymaps-2-1-79-listbox_opened_no ymaps-2-1-79-listbox_align_right"
																						style="width: 0px;">
																						<ymaps
																							class="ymaps-2-1-79-listbox__button ymaps-2-1-79-_hidden-text ymaps-2-1-79-user-selection-none"
																							unselectable="on"
																							title="">
																							<ymaps
																								class="ymaps-2-1-79-listbox__button-icon ymaps-2-1-79-_icon_layers">
																							</ymaps>
																							<ymaps
																								class="ymaps-2-1-79-listbox__button-text">
																								Слои
																							</ymaps>
																							<ymaps
																								class="ymaps-2-1-79-listbox__button-arrow">
																							</ymaps>
																						</ymaps>
																						<ymaps
																							class="ymaps-2-1-79-listbox__panel ymaps-2-1-79-i-custom-scroll"
																							style="transform: translate3d(0px, 0px, 0px) scale(1, 1);">
																							<ymaps
																								class="ymaps-2-1-79-listbox__list ymaps-2-1-79-listbox__list_scrollable_yes"
																								style="max-height: 0px;">
																								<ymaps>
																									<ymaps>
																										<ymaps
																											id="id_168719650183891806318">
																											<ymaps
																												unselectable="on"
																												class="ymaps-2-1-79-user-selection-none">
																												<ymaps
																													class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_yes">
																													<ymaps
																														class="ymaps-2-1-79-listbox__list-item-text">
																														Схема
																													</ymaps>
																												</ymaps>
																											</ymaps>
																										</ymaps>
																									</ymaps>
																								</ymaps>
																								<ymaps>
																									<ymaps>
																										<ymaps
																											id="id_168719650183891806319">
																											<ymaps
																												unselectable="on"
																												class="ymaps-2-1-79-user-selection-none">
																												<ymaps
																													class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no">
																													<ymaps
																														class="ymaps-2-1-79-listbox__list-item-text">
																														Спутник
																													</ymaps>
																												</ymaps>
																											</ymaps>
																										</ymaps>
																									</ymaps>
																								</ymaps>
																								<ymaps>
																									<ymaps>
																										<ymaps
																											id="id_168719650183891806320">
																											<ymaps
																												unselectable="on"
																												class="ymaps-2-1-79-user-selection-none">
																												<ymaps
																													class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no">
																													<ymaps
																														class="ymaps-2-1-79-listbox__list-item-text">
																														Гибрид
																													</ymaps>
																												</ymaps>
																											</ymaps>
																										</ymaps>
																									</ymaps>
																								</ymaps>
																								<ymaps>
																									<ymaps>
																										<ymaps
																											id="id_168719650183891806316">
																											<ymaps>
																												<ymaps
																													class="ymaps-2-1-79-listbox__list-separator">
																												</ymaps>
																											</ymaps>
																										</ymaps>
																									</ymaps>
																								</ymaps>
																								<ymaps>
																									<ymaps>
																										<ymaps
																											id="id_168719650183891806317">
																											<ymaps
																												unselectable="on"
																												class="ymaps-2-1-79-user-selection-none">
																												<ymaps
																													class="ymaps-2-1-79-listbox__list-item ymaps-2-1-79-listbox__list-item_selected_no">
																													<ymaps
																														class="ymaps-2-1-79-listbox__list-item-text">
																														Панорамы
																													</ymaps>
																												</ymaps>
																											</ymaps>
																										</ymaps>
																									</ymaps>
																								</ymaps>
																							</ymaps>
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																			<ymaps
																				class="ymaps-2-1-79-controls__control_toolbar ymaps-2-1-79-user-selection-none"
																				unselectable="on"
																				style="margin-right: 10px; margin-left: 0px; position: inherit;">
																				<ymaps>
																					<ymaps
																						class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text"
																						style="max-width: 28px"
																						title="">
																						<ymaps
																							class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_expand">
																						</ymaps>
																						<ymaps
																							class="ymaps-2-1-79-float-button-text">
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																		</ymaps>
																	</ymaps>
																	<ymaps
																		class="ymaps-2-1-79-controls__bottom"
																		style="top: 0px;">
																		<ymaps
																			class="ymaps-2-1-79-controls__control"
																			style="margin-right: 0px; margin-left: 0px; position: inherit; inset: auto 10px 30px auto;">
																			<ymaps>
																				<ymaps
																					style="display: block;">
																					<ymaps
																						style="display: inline-block; height: 100%; vertical-align: top;">
																						<ymaps
																							id="id_168719650183891806321">
																							<ymaps>
																								<ymaps
																									class="ymaps-2-1-79-scaleline"
																									style="width: 78px;">
																									<ymaps
																										class="ymaps-2-1-79-scaleline__left">
																										<ymaps
																											class="ymaps-2-1-79-scaleline__left-border">
																										</ymaps>
																										<ymaps
																											class="ymaps-2-1-79-scaleline__left-line">
																										</ymaps>
																									</ymaps>
																									<ymaps
																										class="ymaps-2-1-79-scaleline__center">
																										<ymaps
																											class="ymaps-2-1-79-scaleline__label">
																											900&nbsp;м
																										</ymaps>
																									</ymaps>
																									<ymaps
																										class="ymaps-2-1-79-scaleline__right">
																										<ymaps
																											class="ymaps-2-1-79-scaleline__right-border">
																										</ymaps>
																										<ymaps
																											class="ymaps-2-1-79-scaleline__right-line">
																										</ymaps>
																									</ymaps>
																								</ymaps>
																							</ymaps>
																						</ymaps>
																					</ymaps>
																					<ymaps
																						style="display: inline-block; width: 10px; height: 0">
																					</ymaps>
																					<ymaps
																						style="display: inline-block;">
																						<ymaps
																							id="id_168719650183891806322"
																							unselectable="on"
																							class="ymaps-2-1-79-user-selection-none">
																							<ymaps>
																								<ymaps
																									class="ymaps-2-1-79-float-button ymaps-2-1-79-_hidden-text"
																									style="max-width: 28px"
																									title="Измерение расстояний на карте">
																									<ymaps
																										class="ymaps-2-1-79-float-button-icon ymaps-2-1-79-float-button-icon_icon_ruler">
																									</ymaps>
																									<ymaps
																										class="ymaps-2-1-79-float-button-text">
																									</ymaps>
																								</ymaps>
																							</ymaps>
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																		</ymaps>
																	</ymaps>
																	<ymaps
																		class="ymaps-2-1-79-controls__control"
																		style="margin-right: 0px; margin-left: 0px; position: inherit; inset: 108px auto auto 10px;">
																		<ymaps>
																			<ymaps
																				class="ymaps-2-1-79-zoom"
																				style="height: 5px">
																				<ymaps
																					class="ymaps-2-1-79-zoom__plus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none"
																					unselectable="on">
																					<ymaps
																						class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon">
																					</ymaps>
																				</ymaps>
																				<ymaps
																					class="ymaps-2-1-79-zoom__minus ymaps-2-1-79-zoom__button ymaps-2-1-79-float-button ymaps-2-1-79-user-selection-none"
																					unselectable="on">
																					<ymaps
																						class="ymaps-2-1-79-zoom__icon ymaps-2-1-79-float-button-icon">
																					</ymaps>
																				</ymaps>
																			</ymaps>
																		</ymaps>
																	</ymaps>
																</ymaps>
																<ymaps
																	class="ymaps-2-1-79-searchpanel-pane"
																	style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 7810;">
																	<ymaps>
																		<ymaps
																			class="ymaps-2-1-79-search ymaps-2-1-79-search_layout_panel ymaps-2-1-79-searchbox__panel-layout">
																			<ymaps
																				class="ymaps-2-1-79-search__layout">
																				<ymaps
																					id="id_168719650183891806332">
																					<ymaps>
																						<ymaps
																							class="ymaps-2-1-79-searchbox__input-cell">
																							<ymaps
																								class="ymaps-2-1-79-searchbox-input">
																								<input
																									class="ymaps-2-1-79-searchbox-input__input"
																									placeholder="Адрес или объект">
																								<ymaps
																									class="ymaps-2-1-79-searchbox-input__clear-button">
																								</ymaps>
																							</ymaps>
																							<ymaps
																								class="ymaps-2-1-79-searchbox-list-button">
																							</ymaps>
																						</ymaps>
																						<ymaps
																							class="ymaps-2-1-79-searchbox__button-cell">
																							<ymaps
																								class="ymaps-2-1-79-searchbox-button ymaps-2-1-79-user-selection-none"
																								unselectable="on">
																								<ymaps
																									class="ymaps-2-1-79-searchbox-button-text">
																									Найти
																								</ymaps>
																							</ymaps>
																						</ymaps>
																					</ymaps>
																				</ymaps>
																				<ymaps
																					class="ymaps-2-1-79-searchbox__fold-button-cell">
																					<ymaps
																						class="ymaps-2-1-79-searchbox__fold-button">
																						<ymaps
																							class="ymaps-2-1-79-searchbox__fold-button-icon">
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																			<ymaps
																				id="id_168719650183891806333">
																				<ymaps>
																					<ymaps
																						class="ymaps-2-1-79-islets_serp-popup ymaps-2-1-79-islets__hidden">
																						<ymaps
																							class="ymaps-2-1-79-islets_serp-popup__tail">
																						</ymaps>
																						<ymaps
																							class="ymaps-2-1-79-islets_serp"
																							style="max-height: 0px;">
																							<ymaps
																								id="id_168719650183891806334">
																								<ymaps>
																								</ymaps>
																							</ymaps>
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																		</ymaps>
																	</ymaps>
																</ymaps>
																<ymaps class="ymaps-2-1-79-places-pane"
																	style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2405;">
																	<ymaps
																		class="ymaps-2-1-79-placemark-overlay ymaps-2-1-79-user-selection-none"
																		unselectable="on"
																		style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 0px; top: 0px;">
																		<ymaps>
																			<ymaps
																				class="ymaps-2-1-79-islets_icon-with-caption">
																				<ymaps
																					class="ymaps-2-1-79-islets_icon-with-caption__caption-block">
																					<ymaps
																						class="ymaps-2-1-79-islets_icon-caption"
																						style="padding: 0px; max-width: 0px;">
																					</ymaps>
																				</ymaps>
																				<ymaps
																					id="id_168719650183891806344">
																					<ymaps
																						class="ymaps-2-1-79-svg-icon ymaps_https___api_maps_yandex_ru_2_1_79_1180001711526islands_icon___1E98FF_34x41_1687196502535"
																						style="position: absolute; width: 34px; height: 41px; left: -11px; top: -38px;">
																						<ymaps
																							class="ymaps-2-1-79-svg-icon-content"
																							style="font: 13px Arial, sans-serif; position: absolute; text-align: center;left: 5px;top: 6px;width: 16px;height: 16px;">
																							<ymaps>
																							</ymaps>
																						</ymaps>
																					</ymaps>
																				</ymaps>
																			</ymaps>
																		</ymaps>
																	</ymaps>
																</ymaps>
															</ymaps>
														</ymaps>
													</ymaps>
												</div>
												<div class="ymap-markers">

												</div>
											</section>
										</div>
									</div>
								</label>
							</div>
						</div>
					</div>
					<div class="checkout-left-addr">
						<div class="k-input-wrapper location__modal_search_box">
							<input type="hidden" name="ORDER_PROP_6" value="0000073738">
							<input autocomplete="off" placeholder="undefined*" class="k-input">
						</div>
					</div>
					<div class="checkout-left-textarea">
						<label class="checkout-left-delivery-title">Комментарий:</label>
						<textarea name="ORDER_DESCRIPTION"></textarea>
					</div>

					<div class="checkout-left-checkbox">
						<div class="reservation-form-r3-r">
							<input type="hidden" name="ORDER_PROP_20" value="N">

							<div class="program-calculator-grid-persons coll2__ mt24 need_prokat__element">
								<div class="program-calculator-grid-rent-select">
									<div class="program-calculator-grid-rent-select-radio">
										<input type="checkbox" required="" class="k-checkbox" id="124" name="form_checkbox_accept[]" value="124">
										<label for="124"></label>
									</div>
								</div>
								<div class="program-calculator-grid-rent-label">
									Ознакомился с
									<a href="/politika-konfidentsialnosti/" target="_blank" class="reservation-form-r3-r-a">политикой конфиденциальности</a>
									и
									<a class="reservation-form-r3-r-a" target="_blank" href="/oferta/">договором-оферты</a>
								</div>
							</div>
						</div>

					</div>
					<div class="bluebutton-wrapper">
						<button class="bluebutton">Перейти к оплате</button>
					</div>
				</div>
				<div class="checkout-right">
					<div>
						<div class="checkout-right-title">Информация о заказе</div>
						<div class="checkout-right-price">
							<div class="checkout-right-price-text">Стоимость: <span>3&nbsp;000 р.</span>
							</div>
						</div>
						<div class="checkout-right-price">
							<div class="checkout-right-price-text">Доставка:
								<span>450 р.</span>
							</div>
						</div>
						<div class="checkout-right-price">
							<div class="checkout-right-price-text">Списать бонусы: <span>0 р.</span>
							</div>
						</div>
						<div class="checkout-right-total">Итого:</div>
						<div class="checkout-right-price-total">3&nbsp;450 р.</div>
						<div class="checkout-right-bonus">Начислим 240 бонусов</div>
						<button class="bluebutton">Перейти к оплате</button>
					</div>
				</div>
				<section class="pay" style="display: none;">
					<div class="pay__item" index="0"><input type="radio" id="pay5" name="PAY_SYSTEM_ID"
							value="5">
						<label for="pay5">Сбербанк</label>
					</div>
				</section>
			</div>
		</div>
	</div>

</form>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>