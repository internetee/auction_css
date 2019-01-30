<?php include('_header.php') ?>
<div class="main-hero main-hero--small main-hero--green">
  <h1><a href="#" class="back-link">
      <i class="icon arrow left"></i>
      <span>Tagasi</span>
    </a>Maksa arve</h1>
</div>
<div class="invoice-overview">
  <div class="u-container">
    <div class="invoice-overview__body">
      <h2>Arve nr 34834844</h2>
      <h3>Makse detailid</h3>
      <div class="details-list-02">
        <ul>
          <li>
            <span class="details-list-02__label">Maksja:</span>
            <span class="details-list-02__value">Leo Lumememm</span>
          </li>
          <li>
            <span class="details-list-02__label">Makse tähtaeg:</span>
            <span class="details-list-02__value">05. oktoober 2017</span>
          </li>
          <li>
            <span class="details-list-02__label">Arve sisu:</span>
            <span class="details-list-02__value">domeenioksjoni tasu kinnisvara.ee</span>
          </li>
          <li>
            <span class="details-list-02__label">Summa:</span>
            <span class="details-list-02__value"><strong>30.00 €</strong></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="payment-methods-02">
  <div class="u-container">
    <div class="payment-methods-02__body">
      <div class="tabs ui segment">
        <div class="tabs__head">
          <a class="tabs__head__item" data-tab="first">Maksa pangas</a>
          <a class="tabs__head__item active" data-tab="second">Maksa krediitkaardiga</a>
        </div>
        <div class="tabs__content">
          <div class="ui tab" data-tab="first">
            Tab
          </div>
          <div class="ui tab active" data-tab="second">
            <form class="ui form big form--cc">
              <div class="field field--name">
                <label>Kaardiomaniku nimi</label>
                <input type="text">
              </div>
              <div class="fields">
                <div class="field field--card-number suffix-mastercard">
                  <label>Krediitkaardi number</label>
                  <input type="text">
                </div>
                <div class="field field--ccv">
                  <label>CCV number</label>
                  <input type="text">
                </div>
              </div>
              <div class="field">
                <label>Kaardi kehtivuse lõpp</label>
                <div class="fields">
                  <div class="field field--month">
                    <select class="ui dropdown">
                      <option value="">Vali</option>
                      <option>Jaanuar</option>
                    </select>
                  </div>
                  <div class="field field--year">
                    <select class="ui dropdown">
                      <option value="">Vali</option>
                      <option>2018</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <button class="ui primary button big">Maksa</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('_footer.php') ?>
