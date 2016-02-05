FROM ubuntu:14.04

RUN echo "Acquire::http { Proxy \"http://192.168.40.130:3142\"; };" > /etc/apt/apt.conf.d/02proxy && \
    apt-get update -y && \
    apt-get install -y dnsmasq && \
    apt-get clean

ADD dnsmasq.conf /etc/dnsmasq.conf
RUN mkdir -p /etc/dnsmasq.host

VOLUME ["/etc/dnsmasq.d","/etc/dnsmasq.host"]
EXPOSE 53/udp

CMD ["dnsmasq","-d"]
