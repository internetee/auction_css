<?php include('_header.php') ?>
<div class="main-hero small">
  <h1>Domeenioksjonid</h1>
</div>
<div class="page">
  <div class="page--hero">
    <div class="page--hero__overview">
      <div class="u-container">
        <p>Domeene oksjonil <strong>38</strong>.</p>
      </div>
    </div>
    <div class="u-container">
      <div class="ui grid centered stackable">
        <div class="five wide column aligned">
          <h3 class="ui icon header">
            <i class="icon gift"></i>
            1. Esita pakkumine,
          </h3>
          <p>mida saad muuta ja tühistada oksjoni lõppemiseni. Domeenioksjonid toimuvad pimeoksjoni stiilis, mis tähendab, et keegi teine esitatud pakkumise suurust ei näe.</p>
        </div>
        <div class="five wide column aligned">
          <h3 class="ui icon header">
            <i class="icon stopwatch"></i>
            2. oota oksjoni tulemusi
          </h3>
          <p>Kui sinu pakkumine oli edukas anname sellest e-posti teel sulle teada.</p>
        </div>
        <div class="five wide column aligned">
          <h3 class="ui icon header">
            <i class="icon credit card"></i>
            3. Maksa oksjoni tasu,
          </h3>
          <p>mille järel saada domeeni registreerimiseks vajaliku koodi.</p>
        </div>
      </div>
      <div class="page--hero__text">
        <p>Tutvu ka oksjonikeskkonna <a href="#">kasutajatingimustega</a> ja loe detailsemalt <a href="#">oksjoniprotsessist</a>.</p>
      </div>
    </div>
  </div>
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
        <thead>
          <tr>
            <th><span>Domeen</span></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td><strong>lumememm.ee</strong></td>
          <td class="right aligned"><a href="https://www.we.ee/" target="_blank" rel="noopener noreferrer"><span class="link__label">Vaata</span><i class="icon arrow right"></i></a></td>
        </tr>
        <tr>
          <td><strong>lumememm.ee</strong></td>
          <td class="right aligned"><a href="https://www.we.ee/" target="_blank" rel="noopener noreferrer"><span class="link__label">Vaata</span><i class="icon arrow right"></i></a></td>
        </tr>
        <tr>
          <td><strong>lumememm.ee</strong></td>
          <td class="right aligned"><a href="https://www.we.ee/" target="_blank" rel="noopener noreferrer"><span class="link__label">Vaata</span><i class="icon arrow right"></i></a></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="paginator">
    <div class="ui container">
      <div aria-label="Pagination Navigation" role="navigation" class="ui pagination menu">
        <a aria-current="false" tabindex="-1" value="1" type="prevItem" class="disabled icon item">
          <i aria-hidden="true" class="arrow left icon"></i>
          <span>Eelmised</span>
        </a>
        <a aria-current="true" tabindex="0" value="1" type="pageItem" class="active item">1</a>
        <a aria-current="false" tabindex="0" value="2" type="pageItem" class="item">2</a>
        <a aria-current="false" tabindex="0" value="3" type="pageItem" class="item">3</a>
        <a aria-current="false" tabindex="0" value="4" type="pageItem" class="item">4</a>
        <a aria-current="false" tabindex="0" value="5" type="pageItem" class="item">5</a>
        <a aria-current="false" tabindex="-1" value="6" type="ellipsisItem" class="disabled item">...</a>
        <a aria-current="false" tabindex="0" value="13" type="pageItem" class="item">13</a>
        <a aria-current="false" tabindex="0" value="2" type="nextItem" class="icon item">
          <span>Järgmised</span>
          <i aria-hidden="true" class="arrow right icon"></i>
        </a>
      </div>
      <form class="ui form">
        <div class="inline field">
          <label>Tulemusi lehel</label>
          <div role="listbox" aria-expanded="false" class="ui selection dropdown" tabindex="0">
            <div class="text" role="alert" aria-live="polite">24</div>
            <i aria-hidden="true" class="dropdown icon"></i>
            <div class="menu transition">
              <div role="option" aria-checked="false" aria-selected="false" class="item" style="pointer-events: all;">
                <span class="text">6</span>
              </div>
              <div role="option" aria-checked="false" aria-selected="false" class="item" style="pointer-events: all;">
                <span class="text">12</span>
              </div>
              <div role="option" aria-checked="true" aria-selected="true" class="active selected item" style="pointer-events: all;">
                <span class="text">24</span>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('_footer.php') ?>
