        <!-- page content -->
        <div class="right_col" role="main">
          <style>
            .aku {
              position: relative;
              padding: 20px 10px;
              display: block;
              text-decoration: none;
              text-transform: uppercase;
              width: 200px;
              overflow: hidden;
            }

            a span {
              position: relative;
              z-index: 1;
              color: #fff;
              font-size: 18px;
              letter-spacing: 8px;
            }

            a .liquid {
              position: absolute;
              left: 0;
              top: -85px;
              width: 200px;
              height: 200px;
              background: #4973ff;
              box-shadow: inset 0 0 50px rgba(247, 247, 247, 247);
              transition: 0.5s;
            }

            a .liquid::before,
            a .liquid::after {
              content: "";
              position: absolute;
              width: 200%;
              height: 200%;
              top: 0;
              left: 50%;
              transform: translate(-50%, -75%);
            }

            a .liquid::before {
              border-radius: 45%;
              background: rgba(228, 231, 234, 1);
              animation: animate 3s linear infinite;
            }

            a .liquid::after {
              border-radius: 40%;
              background: rgba(228, 231, 234, 1);
              animation: animate 5s linear infinite;
            }

            @keyframes animate {
              0% {
                transform: translate(-50%, -75%) rotate(0deg);
              }

              25% {
                transform: translate(-50%, -75%) rotate(90deg);
              }

              50% {
                transform: translate(-50%, -75%) rotate(180deg);
              }

              75% {
                transform: translate(-50%, -75%) rotate(270deg);
              }

              100% {
                transform: translate(-50%, -75%) rotate(360deg);
              }
            }
          </style>
          <!-- top tiles -->
          <div class="col-md-2 col-sm-4 col-xs-6" style="margin-right: 30px; margin-bottom: 10px">
            <div class="aku">
              <a href="<?= base_url('rule/maag'); ?>">
                <span style="margin-left:50px;">Maag</span>
                <div class="liquid"></div>
              </a>
            </div>
          </div>
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6" style="margin-right: 28px;margin-bottom: 10px">
              <div class="aku">
                <a href="<?= base_url('rule/diare'); ?>">
                  <span style="margin-left:50px;">Diare</span>
                  <div class="liquid"></div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6" style="margin-right: 28px;margin-bottom: 10px">
              <div class="aku">
                <a href="<?= base_url('rule/disentri'); ?>">
                  <span style="margin-left:20px;">Disentri</span>
                  <div class="liquid"></div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6" style="margin-right: 28px;margin-bottom: 10px">
              <div class="aku">
                <a href="<?= base_url('rule/apendictis'); ?>">
                  <span>Apendictis</span>
                  <div class="liquid"></div>
                </a>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6" style="margin-bottom: 10px">
              <div class="aku">
                <a href="<?= base_url('rule/keracunan'); ?>">
                  <span>Keracunan</span>
                  <div class="liquid"></div>
                </a>
              </div>
            </div>
          </div>
          <!-- /top tiles -->
        </div>
        <!-- /page content -->