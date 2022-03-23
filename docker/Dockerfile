FROM ddtracetestlatest

USER root

RUN set -eux \
    && curl \
    --location \
    --silent \
    --show-error \
    https://github.com/DataDog/dd-trace-php/releases/download/0.71.0/datadog-php-tracer_0.71.0_amd64.deb \
    > /tmp/datadog-php-tracer.deb \
    && dpkg -i /tmp/datadog-php-tracer.deb \
    && rm /tmp/datadog-php-tracer.deb
    # Keep only version currently in use
#    && docker-php-ext-install opcache \
#    && docker-php-ext-configure opcache --enable-opcache \
#    && echo "opcache.jit=0" >> /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini
