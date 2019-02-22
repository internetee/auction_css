<?php include('_header.php') ?>
<div class="main-hero small green">
  <h1>Maksa arve</h1>
  <a href="#" class="back-link">
    <i class="icon arrow left"></i>
    <span>Tagasi</span>
  </a>
</div>
<div class="page">
  <div class="page--block">
    <div class="u-container">
      <div class="page--block--header">
        <h2>Arve nr 34834844</h2>
      </div>
      <div class="ui relaxed centered grid">
        <div class="sixteen wide mobile twelve wide tablet eight wide computer column">
          <h3>Makse detailid</h3>
          <table class="ui very basic table">
            <tbody>
            <tr>
              <td>Maksja:</td>
              <td>Leo Lumememm</td>
            </tr>
            <tr>
              <td>Makse tähtaeg:</td>
              <td>05. oktoober 2017</td>
            </tr>
            <tr>
              <td>Arve sisu:</td>
              <td>domeenioksjoni tasu kinnisvara.ee</td>
            </tr>
            <tr>
              <td>Summa:</td>
              <td><strong>30.00 €</strong></td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="payment-methods">
    <div class="ui container text">
      <div class="tabs ui segment">
        <div class="tabs__head">
          <a class="tabs__head__item" data-tab="first">Maksa pangas</a>
          <a class="tabs__head__item active" data-tab="second">Maksa krediitkaardiga</a>
        </div>
        <div class="tabs__content">
          <div class="ui tab" data-tab="first">
            <div class="items">
              <div class="item">
                <a href="#">
                  <img src="assets/images/banks/swed.png" alt="Swedbank">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/images/banks/seb.png" alt="SEB">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/images/banks/luminor.png" alt="Luminor">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <img src="assets/images/banks/lhv.png" alt="LHV">
                </a>
              </div>
              <div class="item">
                <a href="#">
                  <i class="icon credit card"></i>
                  Maksa krediitkaardiga
                </a>
              </div>
            </div>
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
