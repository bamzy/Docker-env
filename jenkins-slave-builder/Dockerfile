FROM ubuntu:trusty

RUN echo "Acquire::http { Proxy \"http://192.168.2.164:3142\"; };" > /etc/apt/apt.conf.d/02proxy && \
    echo "deb http://ppa.launchpad.net/ansible/ansible/ubuntu trusty main" >> /etc/apt/sources.list &&  \
    apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 7BB9C367 && \
    apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y build-essential git openssh-server mercurial php5-cli php5-mysql php5-curl nodejs nodejs-legacy npm && \
    rm -rf /var/lib/apt/lists/* 
RUN npm install -g bower grunt-cli
ADD jdk-7u75-linux-x64.tar.gz /opt/jdk/
USER root
RUN sudo echo Asia/Tehran > /etc/timezone && sudo dpkg-reconfigure --frontend noninteractive tzdata
RUN update-alternatives --install /usr/bin/java java /opt/jdk/jdk1.7.0_75/bin/java 100 && \
    update-alternatives --install /usr/bin/javac javac /opt/jdk/jdk1.7.0_75/bin/javac 100
RUN adduser --disabled-password --home=/home/samat --gecos "" samat &&     mkdir -p /var/run/sshd
EXPOSE 22
VOLUME ["/home/samat"]
CMD ["/usr/sbin/sshd","-D"]
