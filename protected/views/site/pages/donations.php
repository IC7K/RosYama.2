<?
$this->pageTitle=Yii::app()->name . ' - Пожертвования';
$this->layout='//layouts/header_default_without_add';
?>
<div class="lCol">
<?php $this->widget('application.widgets.news.newsWidget'); ?>
<?php $this->widget('application.widgets.social.socialWidget'); ?>
</div>

<div class="rCol">
<p><b>Деньги в поддержку РосЯмы можно перечислять сюда:</b></p>

<p><b>Яндекс.Деньги</b> <br>
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/embed/bank.xml?payer-type=legal&amp;recipient-name=%D0%9D%D0%9E+%22%D0%A4%D0%BE%D0%BD%D0%B4+%D0%B1%D0%BE%D1%80%D1%8C%D0%B1%D1%8B+%D1%81+%D0%BA%D0%BE%D1%80%D1%80%D1%83%D0%BF%D1%86%D0%B8%D0%B5%D0%B9%22&amp;recipient-inn=7709471429&amp;recipient-kpp=770901001&amp;recipient-bik=044525593&amp;recipient-account=40703810402710000002&amp;recipient-kbk=&amp;recipient-okato=&amp;writer=seller&amp;targets=%D0%9F%D0%BE%D0%B6%D0%B5%D1%80%D1%82%D0%B2%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%D0%BD%D0%B0+%D1%80%D0%B5%D0%B0%D0%BB%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B0+%22%D0%A0%D0%BE%D1%81%D0%AF%D0%BC%D0%B0%22.+%D0%9D%D0%94%D0%A1+%D0%BD%D0%B5+%D0%BE%D0%B1%D0%BB%D0%B0%D0%B3%D0%B0%D0%B5%D1%82%D1%81%D1%8F.&amp;default-sum=1000&amp;nds-rate=&amp;button-text=03" width="490" height="190"></iframe>
</p>



<p><b>Банковская карта</b> <br> 
<table>
<tr>
<td>
<form action="https://auth.robokassa.ru/Merchant/Index.aspx" method="POST" target="_blank">
<input name="MrchLogin" type="hidden" value="fbk" />
<input name="Desc" type="hidden" value="Пожертвование на работу проекта РосЯма" />
<input name="SignatureValue" type="hidden" value="f2f432d446e845b3098768440b796835" />
<input name="shp_Project" type="hidden" value="RosYama" />
<input name="IncCurrLabel" type="hidden" value="BANKOCEAN2R" />
<input class="b-input-text__input" maxlength="10" name="FreeOutSum" style="text-align: right;" type="text" value="1000" />
<span class="b-widget-donate__currency">руб. </span>
<input name="submit-button" onClick="_gaq.push(['_trackEvent', 'Payment', 'Jump to payment page - rosyama', 'card payments',, true]);" type="submit" value="Пожертвовать" />
</form>
<img src="/images/robokassa/robokassa.gif" style="margin-top: 10px;" />
</td>
</tr>
</table>
</p>

<p><h4>Банковский перевод:</h4>
Банк получателя ОАО «Альфа- Банк», г. Москва<br>
БИК 044525593<br>
К/с 30101810200000000593<br>
Наименование получателя: НО "Фонд борьбы с коррупцией"<br>
ИНН:7709471429<br>
КПП:770901001<br>
№ счета получателя: 40703810402710000002<br>
Назначение платежа: Пожертвование на реализацию проекта "РосЯма". НДС не облагается.
</p>

<hr />

<hr />
<ul>
<li>Финансовый отчёт за 2011 год: <a href="http://fezeev.livejournal.com/50545.html">http://fezeev.livejournal.com/50545.html</a>
<li>Финансовый отчёт за январь-май 2012 года: <a href="http://fezeev.livejournal.com/61845.html">http://fezeev.livejournal.com/61845.html</a>
<li>Финансовый отчёт за июнь 2012 года: <a href="http://fezeev.livejournal.com/63802.html">http://fezeev.livejournal.com/63802.html</a>
<li>Финансовый отчёт за июль 2012 года: <a href="http://fezeev.livejournal.com/64709.html">http://fezeev.livejournal.com/64709.html</a>
<li>Финансовый отчёт за август 2012 года: <a href="http://fezeev.livejournal.com/65617.html">http://fezeev.livejournal.com/65617.html</a>
<li>Финансовый отчёт за сентябрь-октябрь 2012 года: <a href="http://fezeev.livejournal.com/69821.html">http://fezeev.livejournal.com/69821.html</a>
<li>Финансовый отчёт за ноябрь 2012 года: <a href="http://fezeev.livejournal.com/71048.html">http://fezeev.livejournal.com/71048.html</a>
</ul>
</div>
