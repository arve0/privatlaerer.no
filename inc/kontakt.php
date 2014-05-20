      <!-- kontakt -->
      <form method="POST" action="/epost.php">
        <div id="kontakt" class="row">
          <div class="col-xs-12">
            <h3>Kontakt oss</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <p class="help-block"></p>
            <div class="control-group">
              <div class="controls">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input class="form-control" name="navn" type="text" placeholder="Navn" required>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <p class="help-block"></p>
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input class="form-control" name="epost" type="email" placeholder="Epostadresse" required>
                </div>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <p class="help-block"></p>
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                  <input class="form-control" name="telefon" type="text" placeholder="Telefonnummer" required data-validation-regex-regex="[0-9 ]{8,12}" data-validation-regex-message="Telefonnummer med 8-12 nummer.">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="control-group">
              <div class="controls">
                <p class="help-block"></p>
                <textarea class="form-control" name="beskjed" placeholder="Beskjed" required></textarea><br>
                <input type="hidden" name="send" value="kontakt" />
                <button type="submit" class="form-control btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="modal fade ok">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
              <h4>Takk for henvendelsen</h4>
            </div>
            <div class="modal-body">
              <p class="lead">Vi tar kontakt med deg så snart som mulig.</p>
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default">Lukk</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade feil">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
              <h4>Feil</h4>
            </div>
            <div class="modal-body">
              <p class="lead">Noe gikk feil. Ta isteden kontakt med oss på telefon 41203185.</p>
            </div>
            <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default">Lukk</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <br>
	  <p><strong>Postadresse:</strong><br>
	  Privatlaerer.no AS<br>
	  O. Engelbrektssons A. 48<br>
	  7040 Trondheim<br><br>
	  <strong>Org.nr:</strong> <a href="http://w2.brreg.no/enhet/sok/detalj.jsp?orgnr=912378446">912 378 446</a></p>
	</div>
      </div>
