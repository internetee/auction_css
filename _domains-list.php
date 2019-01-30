<?php include('_header.php') ?>
<div class="main-hero main-hero--small">
  <h1>Domeenioksjonid</h1>
</div>
<div class="features-grid-1">
  <div class="features-grid-1__overview">
    <div class="u-container">
      <span class="features-grid-1__overview__title">Domeene oksjonil <strong>38</strong>.</span>
    </div>
  </div>
  <div class="u-container">
    <div class="features-grid-1__items">
      <div class="features-grid-1__item">
        <h3 class="ui icon header">
          <i class="icon gift"></i>
          <div class="content">
            1. Esita pakkumine,
            <div class="sub header">mida saad muuta ja tühistada oksjoni lõppemiseni. Domeenioksjonid toimuvad pimeoksjoni stiilis, mis tähendab, et keegi teine esitatud pakkumise suurust ei näe. </div>
          </div>
        </h3>
      </div>
      <div class="features-grid-1__item">
        <h3 class="ui icon header">
          <i class="icon stopwatch"></i>
          <div class="content">
            2. oota oksjoni tulemusi
            <div class="sub header">Kui sinu pakkumine oli edukas anname sellest e-posti teel sulle teada.</div>
          </div>
        </h3>
      </div>
      <div class="features-grid-1__item">
        <h3 class="ui icon header">
          <i class="icon credit card"></i>
          <div class="content">
            3. Maksa oksjoni tasu,
            <div class="sub header">mille järel saada domeeni registreerimiseks vajaliku koodi.</div>
          </div>
        </h3>
      </div>
    </div>
    <div class="features-grid-1__text">
      <p>Tutvu ka oksjonikeskkonna <a href="#">kasutajatingimustega</a> ja loe detailsemalt <a href="#">oksjoniprotsessist</a>.</p>
    </div>
  </div>
</div>
<div class="domains-list--wrap">
  <div class="page--header">
    <div class="u-container">
      <form class="ui form form-filter">
        <div class="form-filter--search">
          <div class="form-filter--buttons">
            <button class="form-filter--buttons__button form-filter--buttons__button--active">Oksjonil</button>
            <button class="form-filter--buttons__button">Minu oksjonid</button>
          </div>
          <div class="search-field">
            <div class="ui massive input icon"><input placeholder="Otsi domeeni" name="queryKeys" type="text" value=""></div>
            <button type="submit" class="ui icon primary button" role="button"><i aria-hidden="true" class="arrow right icon"></i></button>
          </div>
          <div class="form-filter--actions"><i aria-hidden="true" class="th list big link icon active"></i><i aria-hidden="true" class="th big link icon"></i></div>
        </div>
      </form>
    </div>
  </div>
  <div class="u-container">
    <div class="domains-list">
      <table class="ui table selectable unstackable">
        <thead class="">
          <tr class="">
            <th class=""><span>Domeen</span></th>
            <th class=""></th>
          </tr>
        </thead>
        <tbody class="">
          <tr class="">
            <td><strong>lumememm.ee</strong></td>
            <td class="right aligned"><a href="https://www.we.ee/" target="_blank" rel="noopener noreferrer"><span class="link__label">Vaata</span><i class="icon arrow right"></i></a></td>
          </tr>
          <tr class="">
            <td><strong>lumememm.ee</strong></td>
            <td class="right aligned"><a href="https://www.we.ee/" target="_blank" rel="noopener noreferrer"><span class="link__label">Vaata</span><i class="icon arrow right"></i></a></td>
          </tr>
          <tr class="">
            <td><strong>lumememm.ee</strong></td>
            <td class="right aligned"><a href="https://www.we.ee/" target="_blank" rel="noopener noreferrer"><span class="link__label">Vaata</span><i class="icon arrow right"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="paginator">
      <div class="container">
        <div aria-label="Pagination Navigation" role="navigation" class="ui pagination menu"><a aria-current="false" tabindex="-1" value="1" type="prevItem" class="disabled icon item"><i aria-hidden="true" class="arrow left icon"></i><span>Eelmised</span></a><a aria-current="true" tabindex="0" value="1" type="pageItem" class="active item">1</a><a aria-current="false" tabindex="0" value="2" type="pageItem" class="item">2</a><a aria-current="false" tabindex="0" value="3" type="pageItem" class="item">3</a><a aria-current="false" tabindex="0" value="4" type="pageItem" class="item">4</a><a aria-current="false" tabindex="0" value="2" type="nextItem" class="icon item"><span>Järgmised</span><i aria-hidden="true" class="arrow right icon"></i></a></div>
        <form class="ui form">
          <div class="inline field"><label>Tulemusi lehel</label>
            <select class="ui dropdown">
              <option>20</option>
              <option>40</option>
              <option>60</option>
            </select>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('_footer.php') ?>
