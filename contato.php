<?php require_once(CORE . "Contato/Config" . EXT); ?>
<div class="theme-page padding-bottom-66">
  <div class="row gray full-width page-header vertical-align-table">
    <div class="row full-width padding-top-bottom-50 vertical-align-cell">
      <div class="row">
        <div class="page-header-left">
          <h1>Fale com a gente</h1>
        </div>
        <div class="page-header-right">
          <div class="bread-crumb-container">
            <label>Você está aqui:</label>
            <ul class="bread-crumb">
              <li>
                <a title="Início" href="<?php echo URL; ?>">
                  Início
                </a>
              </li>
              <li class="separator">
                &#47;
              </li>
              <li>
                Contato
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row margin-top-70">
    <div class="column column-3-4">
      <div class="contact-map" id="map"></div>
      <div class="row page-margin-top">
        <div class="column column-1-3">
          <ul class="features-list">
            <li>
              <h5>Fale com a gente em</h5>
              <div class="icon sl-small-phone-circle"></div>
              <p>
                Telefone: (19) 3405-9465<br>
                WhatsApp: (19) 9 9158-3013
              </p>
            </li>
          </ul>
        </div>
        <div class="column column-1-5">
          <ul class="features-list">
            <li>
              <h5>PontoCar - Centro automotivo</h5>
              <div class="icon sl-small-location-map"></div>
              <p>Rua Germano Giusti, 126 <br>
                Jardim Paulista, Americana - SP<br>
                
            </li>
          </ul>
        </div>
      </div>
      <h3 class="box-header page-margin-top">Deixe uma mensagem</h3>
      <form class="contact-form page-margin-top" id="contact-form" method="post" action="<?php echo URL; ?>core/Contato/Envio.php">
        <div class="row">
          <fieldset class="column column-1-2">
            <input class="text-input" name="name" type="text" value="<?php echo _def_name; ?>" placeholder="<?php echo _def_name; ?>">
            <input class="text-input" name="email" type="text" value="<?php echo _def_email; ?>" placeholder="<?php echo _def_email; ?>">
            <input class="text-input" name="phone" type="text" value="<?php echo _def_phone; ?>" placeholder="<?php echo _def_phone; ?>">
          </fieldset>
          <fieldset class="column column-1-2">
            <textarea name="message" placeholder="<?php echo _def_message; ?>"><?php echo _def_message; ?></textarea>
          </fieldset>
        </div>
        <div class="row margin-top-30">
          <div class="column column-1-2">
            <p>Nós entraremos em contato com você dentro de um dia útil.</p>
          </div>
          <div class="column column-1-2 align-right">
            <input type="hidden" name="action" value="contact_form" />
            <div class="row margin-top-20 padding-bottom-20">
              <a class="more submit-contact-form" href=""><span>Enviar mensagem</span></a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="column column-1-4 re-smart-column">
      <div class="re-smart-column-wrapper">
        <div class="call-to-action">
          <div class="hexagon small"><div class="sl-small-percent"></div></div>
          <h4 class="margin-top-58">Agendamento</h4>
          <p class="description">Faça seu agendamento online, rápido e fácil.</p>
          <a class="more" href="<?php echo URL; ?>agendamento" title="Agende agora!"><span>Agende agora!</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
