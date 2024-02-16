FROM alpine:3.19.1

RUN apk update && \
    apk add postgresql postgresql-client

RUN mkdir /run/postgresql && chown postgres:postgres /run/postgresql/

RUN su postgres -c "initdb -D /var/lib/postgresql/data" && \
    su postgres -c "echo 'host all all 0.0.0.0/0 md5' >> /var/lib/postgresql/data/pg_hba.conf" && \
    su postgres -c "echo \"listen_addresses = '*'\" >> /var/lib/postgresql/data/postgresql.conf" && \
    su postgres -c "pg_ctl start -D /var/lib/postgresql/data" && \
    su postgres -c "psql -c \"ALTER USER postgres WITH PASSWORD '1234';\""

EXPOSE 5432

CMD ["su", "postgres", "-c", "postgres -D /var/lib/postgresql/data"]