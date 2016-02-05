FROM ubuntu:trusty

ADD jdk-7u75-linux-x64.tar.gz /opt/jdk/
RUN update-alternatives --install /usr/bin/java java /opt/jdk/jdk1.7.0_75/bin/java 100 && \
    update-alternatives --install /usr/bin/javac javac /opt/jdk/jdk1.7.0_75/bin/javac 100
ADD flyway-commandline-3.1.tar.gz /opt/
VOLUME ["/opt/flyway-3.1/conf","/opt/flyway-3.1/sql","/opt/flyway-3.1/jars"]
WORKDIR /opt/flyway-3.1
CMD ["/opt/flyway-3.1/flyway","info"]
