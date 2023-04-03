<footer class="footer">
    <div class="footer__bg">
        <div class="footer__inner">
            <div class="footer__row">
                <div class="footer__col footer__col--l">
                    <ul class="footer__list footer__list--l">
                        <li>{{ __('Email') }}: <a href="mailto:{{ $mdsettings['email1'] }}"
                                class="header__email">{{ $mdsettings['email1'] }}</a></li>
                        <li>{{ __('Email') }}: <a href="mailto:{{ $mdsettings['email1'] }}"
                                class="header__email">{{ $mdsettings['email2'] }}</a></li>
                        <li>{{ __('Phone') }}: <a
                                href="tel:+{{ preg_replace('![^0-9]+!', '', $mdsettings['phone1']) }}"
                                class="header__tel">{{ $mdsettings['phone1'] }}</a> </li>
                        <li>{{ __('Phone') }}: <a
                                href="tel:+{{ preg_replace('![^0-9]+!', '', $mdsettings['phone2']) }}"
                                class="header__tel">{{ $mdsettings['phone2'] }}</a> </li>
                        <li>{{ __('Fax') }}: <a
                                href="tel:+{{ preg_replace('![^0-9]+!', '', $mdsettings['fax']) }}"
                                class="header__tel">{{ $mdsettings['fax'] }}</a> </li>
                    </ul>
                </div>
                <address class="footer__col footer__col--r">
                    <ul class="footer__list footer__list--r">
                        <li><b>{{ __('Address') }}</b>:</li>
                        <li><a href="{{ $mdsettings['gmaplink1'] }}" target="_blank">{{ $mdsettings['address1'] }}</a></li>
                        <li><a href="{{ $mdsettings['gmaplink2'] }}" target="_blank">{{ $mdsettings['address2'] }}</a></li>
                        <li>{{ $mdsettings['district'] }}, {{ $mdsettings['city'] }}</li>
                    </ul>
                </address>
            </div>
            <div class="footer__bottom">
                <small class="footer__bottom-text">
                    Copyright © {{ date('Y') }} {{ __('All Rights Reserved') }} | Orga Kimya
                </small>
            </div>
        </div>
    </div>
</footer>
