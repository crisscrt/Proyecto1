/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     20/12/2017 02:00:35 p. m.                    */
/*==============================================================*/


drop index r_nvl_esc_fk;

drop index levels_pk;

drop table levels;

drop index r_usn_anl_fk;

drop index r_usn_hro_fk;

drop index r_usn_usu_fk;

drop index levels_users_pk;

drop table levels_users;

drop index r_hro_nvl_fk;

drop index schedules_pk;

drop table schedules;

drop index schools_pk;

drop table schools;

drop index r_anl_usu_fk;

drop index r_anl_esc_fk;

drop index school_years_pk;

drop table school_years;

drop index r_nhe_usu_fk;

drop index r_nhe_anl_fk;

drop index r_nhe_est_fk;

drop index scores_pk;

drop table scores;

drop index r_est_usu_creacion_fk;

drop index r_est_usu_representante_fk;

drop index students_pk;

drop table students;

drop index r_nve_est_fk;

drop index r_nve_nvl_fk;

drop index student_levels_pk;

drop table student_levels;

drop index r_tut_anl_fk;

drop index r_tut_niv_fk;

drop index r_tut_usu_fk;

drop index tutors_pk;

drop table tutors;

drop index r_usu_esc_fk;

drop index users_pk;

drop table users;

/*==============================================================*/
/* Table: levels                                                */
/*==============================================================*/
create table levels (
   id                   serial               not null,
   school_id            int4                 null,
   nombre               varchar(100)         null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_levels primary key (id)
);

/*==============================================================*/
/* Index: levels_pk                                             */
/*==============================================================*/
create unique index levels_pk on levels (
id
);

/*==============================================================*/
/* Index: r_nvl_esc_fk                                          */
/*==============================================================*/
create  index r_nvl_esc_fk on levels (
school_id
);

/*==============================================================*/
/* Table: levels_users                                          */
/*==============================================================*/
create table levels_users (
   id                   serial               not null,
   user_id              int4                 null,
   schedule_id          int4                 null,
   school_id            int4                 null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_levels_users primary key (id)
);

/*==============================================================*/
/* Index: levels_users_pk                                       */
/*==============================================================*/
create unique index levels_users_pk on levels_users (
id
);

/*==============================================================*/
/* Index: r_usn_usu_fk                                          */
/*==============================================================*/
create  index r_usn_usu_fk on levels_users (
user_id
);

/*==============================================================*/
/* Index: r_usn_hro_fk                                          */
/*==============================================================*/
create  index r_usn_hro_fk on levels_users (
schedule_id
);

/*==============================================================*/
/* Index: r_usn_anl_fk                                          */
/*==============================================================*/
create  index r_usn_anl_fk on levels_users (
school_id
);

/*==============================================================*/
/* Table: schedules                                             */
/*==============================================================*/
create table schedules (
   id                   serial               not null,
   level_id             int4                 null,
   cod_exp_hro_nvl      varchar(10)          null,
   materia              varchar(50)          null,
   hora_inicio          varchar(5)           null,
   hora_fin             varchar(5)           null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_schedules primary key (id)
);

/*==============================================================*/
/* Index: schedules_pk                                          */
/*==============================================================*/
create unique index schedules_pk on schedules (
id
);

/*==============================================================*/
/* Index: r_hro_nvl_fk                                          */
/*==============================================================*/
create  index r_hro_nvl_fk on schedules (
level_id
);

/*==============================================================*/
/* Table: schools                                               */
/*==============================================================*/
create table schools (
   id                   serial               not null,
   nombre               varchar(50)          null,
   ruc                  varchar(15)          null,
   direccion            varchar(1000)        null,
   pagina_web           varchar(500)         null,
   fecha_creacion       date                 null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_schools primary key (id)
);

/*==============================================================*/
/* Index: schools_pk                                            */
/*==============================================================*/
create unique index schools_pk on schools (
id
);

/*==============================================================*/
/* Table: school_years                                          */
/*==============================================================*/
create table school_years (
   id                   serial               not null,
   school_id            int4                 null,
   user_id              int4                 null,
   descripcion          varchar(50)          null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_school_years primary key (id)
);

/*==============================================================*/
/* Index: school_years_pk                                       */
/*==============================================================*/
create unique index school_years_pk on school_years (
id
);

/*==============================================================*/
/* Index: r_anl_esc_fk                                          */
/*==============================================================*/
create  index r_anl_esc_fk on school_years (
school_id
);

/*==============================================================*/
/* Index: r_anl_usu_fk                                          */
/*==============================================================*/
create  index r_anl_usu_fk on school_years (
user_id
);

/*==============================================================*/
/* Table: scores                                                */
/*==============================================================*/
create table scores (
   id                   serial               not null,
   student_id           int4                 null,
   level_id             int4                 null,
   user_id              int4                 null,
   descripcion          varchar(50)          null,
   valor                varchar(10)          null,
   created              date                 null,
   modified             date                 null,
   constraint pk_scores primary key (id)
);

/*==============================================================*/
/* Index: scores_pk                                             */
/*==============================================================*/
create unique index scores_pk on scores (
id
);

/*==============================================================*/
/* Index: r_nhe_est_fk                                          */
/*==============================================================*/
create  index r_nhe_est_fk on scores (
student_id
);

/*==============================================================*/
/* Index: r_nhe_anl_fk                                          */
/*==============================================================*/
create  index r_nhe_anl_fk on scores (
level_id
);

/*==============================================================*/
/* Index: r_nhe_usu_fk                                          */
/*==============================================================*/
create  index r_nhe_usu_fk on scores (
user_id
);

/*==============================================================*/
/* Table: students                                              */
/*==============================================================*/
create table students (
   id                   serial               not null,
   representante_id     int4                 null,
   user_id              int4                 null,
   identificacion       varchar(15)          null,
   primer_nombre        varchar(50)          null,
   segundo_nombre       varchar(50)          null,
   primer_apellido      varchar(50)          null,
   segundo_apellido     varchar(50)          null,
   direccion            varchar(1000)        null,
   telefono_uno_contacto varchar(20)          null,
   telefono_dos_contacto varchar(20)          null,
   observacion          varchar(1000)        null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_students primary key (id)
);

/*==============================================================*/
/* Index: students_pk                                           */
/*==============================================================*/
create unique index students_pk on students (
id
);

/*==============================================================*/
/* Index: r_est_usu_representante_fk                            */
/*==============================================================*/
create  index r_est_usu_representante_fk on students (
representante_id
);

/*==============================================================*/
/* Index: r_est_usu_creacion_fk                                 */
/*==============================================================*/
create  index r_est_usu_creacion_fk on students (
user_id
);

/*==============================================================*/
/* Table: student_levels                                        */
/*==============================================================*/
create table student_levels (
   id                   serial               not null,
   level_id             int4                 null,
   student_id           int4                 null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_student_levels primary key (id)
);

/*==============================================================*/
/* Index: student_levels_pk                                     */
/*==============================================================*/
create unique index student_levels_pk on student_levels (
id
);

/*==============================================================*/
/* Index: r_nve_nvl_fk                                          */
/*==============================================================*/
create  index r_nve_nvl_fk on student_levels (
level_id
);

/*==============================================================*/
/* Index: r_nve_est_fk                                          */
/*==============================================================*/
create  index r_nve_est_fk on student_levels (
student_id
);

/*==============================================================*/
/* Table: tutors                                                */
/*==============================================================*/
create table tutors (
   id                   serial               not null,
   user_id              int4                 null,
   level_id             int4                 null,
   schoolyear_id        int4                 null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_tutors primary key (id)
);

/*==============================================================*/
/* Index: tutors_pk                                             */
/*==============================================================*/
create unique index tutors_pk on tutors (
id
);

/*==============================================================*/
/* Index: r_tut_usu_fk                                          */
/*==============================================================*/
create  index r_tut_usu_fk on tutors (
user_id
);

/*==============================================================*/
/* Index: r_tut_niv_fk                                          */
/*==============================================================*/
create  index r_tut_niv_fk on tutors (
level_id
);

/*==============================================================*/
/* Index: r_tut_anl_fk                                          */
/*==============================================================*/
create  index r_tut_anl_fk on tutors (
schoolyear_id
);

/*==============================================================*/
/* Table: users                                                 */
/*==============================================================*/
create table users (
   id                   serial               not null,
   school_id            int4                 null,
   email                varchar(100)         null,
   identificacion       varchar(15)          null,
   primer_nombre        varchar(50)          null,
   segundo_nombre       varchar(50)          null,
   primer_apellido      varchar(50)          null,
   segundo_apellido     varchar(50)          null,
   direccion            varchar(1000)        null,
   telefono_uno_contacto varchar(20)          null,
   telefono_dos_contacto varchar(20)          null,
   es_representante     int2                 null,
   es_docente           int2                 null,
   observacion          varchar(1000)        null,
   estado               int2                 null,
   created              date                 null,
   modified             date                 null,
   constraint pk_users primary key (id)
);

/*==============================================================*/
/* Index: users_pk                                              */
/*==============================================================*/
create unique index users_pk on users (
id
);

/*==============================================================*/
/* Index: r_usu_esc_fk                                          */
/*==============================================================*/
create  index r_usu_esc_fk on users (
school_id
);

alter table levels
   add constraint fk_levels_r_nvl_esc_schools foreign key (school_id)
      references schools (id)
      on delete restrict on update restrict;

alter table levels_users
   add constraint fk_levels_u_r_usn_anl_school_y foreign key (school_id)
      references school_years (id)
      on delete restrict on update restrict;

alter table levels_users
   add constraint fk_levels_u_r_usn_hro_schedule foreign key (schedule_id)
      references schedules (id)
      on delete restrict on update restrict;

alter table levels_users
   add constraint fk_levels_u_r_usn_usu_users foreign key (user_id)
      references users (id)
      on delete restrict on update restrict;

alter table schedules
   add constraint fk_schedule_r_hro_nvl_levels foreign key (level_id)
      references levels (id)
      on delete restrict on update restrict;

alter table school_years
   add constraint fk_school_y_r_anl_esc_schools foreign key (school_id)
      references schools (id)
      on delete restrict on update restrict;

alter table school_years
   add constraint fk_school_y_r_anl_usu_users foreign key (user_id)
      references users (id)
      on delete restrict on update restrict;

alter table scores
   add constraint fk_scores_r_nhe_anl_levels_u foreign key (level_id)
      references levels_users (id)
      on delete restrict on update restrict;

alter table scores
   add constraint fk_scores_r_nhe_est_students foreign key (student_id)
      references students (id)
      on delete restrict on update restrict;

alter table scores
   add constraint fk_scores_r_nhe_usu_users foreign key (user_id)
      references users (id)
      on delete restrict on update restrict;

alter table students
   add constraint fk_students_r_est_usu_users foreign key (user_id)
      references users (id)
      on delete restrict on update restrict;

alter table students
   add constraint fk_students_r_est_usu_users1 foreign key (representante_id)
      references users (id)
      on delete restrict on update restrict;

alter table student_levels
   add constraint fk_student__r_nve_est_students foreign key (student_id)
      references students (id)
      on delete restrict on update restrict;

alter table student_levels
   add constraint fk_student__r_nve_nvl_levels foreign key (level_id)
      references levels (id)
      on delete restrict on update restrict;

alter table tutors
   add constraint fk_tutors_r_tut_anl_school_y foreign key (schoolyear_id)
      references school_years (id)
      on delete restrict on update restrict;

alter table tutors
   add constraint fk_tutors_r_tut_niv_levels foreign key (level_id)
      references levels (id)
      on delete restrict on update restrict;

alter table tutors
   add constraint fk_tutors_r_tut_usu_users foreign key (user_id)
      references users (id)
      on delete restrict on update restrict;

alter table users
   add constraint fk_users_r_usu_esc_schools foreign key (school_id)
      references schools (id)
      on delete restrict on update restrict;

