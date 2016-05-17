--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.2
-- Dumped by pg_dump version 9.5.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: actividad; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE actividad (
    id bigint NOT NULL,
    corrales_cantidad integer,
    corrales_observaciones text,
    manga_cantidad integer,
    manga_observaciones text,
    bretes_cantidad integer,
    bretes_observaciones text,
    romana_cantidad integer,
    romana_observaciones text,
    sala_ordeno_cantidad integer,
    sala_ordeno_observaciones text,
    bebederos_cantidad integer,
    bebederos_observaciones text,
    comederos_cantidad integer,
    comederos_observaciones text,
    cerco_electrico_cantidad integer,
    cerco_electrico_observaciones text,
    num_potreros_cantidad integer,
    num_potreros_observaciones text,
    has_x_potreros_cantidad integer,
    has_x_potreros_observaciones text,
    planta_electrica_cantidad integer,
    planta_electrica_observaciones text,
    tractores_4x2_cantidad integer,
    tractores_4x2_observaciones integer,
    tractores_4x4_cantidad integer,
    tractores_4x4_observaciones integer,
    galpones_cantidad integer,
    galpones_observaciones text,
    silos_cantidad integer,
    silos_observaciones text,
    sembradora_cantidad integer,
    sembradora_observaciones text,
    cosechadora_cantidad integer,
    cosechadora_observaciones text,
    asperjadora_cantidad integer,
    asperjadora_observaciones text,
    carreta_zorra_cantidad integer,
    carreta_zorra_observaciones text,
    rotativa_cantidad integer,
    rotativa_observaciones text,
    rolo_cantidad integer,
    rolo_observaciones text,
    arado_cantidad integer,
    arado_observaciones text,
    surcadora_cantidad integer,
    surcadora_observaciones text,
    abonadora_cantidad integer,
    abonadora_observaciones text,
    embutidora_cantidad integer,
    embutidora_observaciones double precision,
    vagon_forrajero_cantidad integer,
    vagon_forrajero_observaciones text,
    bolsas_ensilar_cantidad integer,
    bolsas_ensilar_observaciones text,
    mecanico_cantidad integer,
    mecanico_observaciones integer,
    manual_cantidad integer,
    manual_observaciones text,
    tanque_frio_cantidad integer,
    tanque_frio_observaciones double precision,
    cantaras_cantidad integer,
    cantaras_observaciones text,
    filtros_tela_cantidad integer,
    filtros_tela_observaciones text,
    paletas_cmt_cantidad integer,
    paletas_cmt_observaciones text,
    paletas_fondo_negro_cantidad integer,
    paletas_fondo_negro_observaciones text,
    reactivo_cmt_cantidad integer,
    reactivo_cmt_observaciones text,
    ordeno_techo_cantidad integer,
    ordeno_techo_observaciones text,
    ordeno_piso_cemento_cantidad integer,
    ordeno_piso_cemento_observaciones text,
    tanque_nitrogeno_cantidad integer,
    tanque_nitrogeno_observaciones integer,
    caja_inseminacion_cantidad integer,
    caja_inseminacion_observacion text,
    pistoleta_inseminacion_cantidad integer,
    pistoleta_inseminacion_observaciones text,
    termo_descongelar_pajuelas_cantidad integer,
    termo_descongelar_pajuelas_observaciones text,
    id_finca bigint,
    fecha date
);


ALTER TABLE actividad OWNER TO postgres;

--
-- Name: actividad_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE actividad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE actividad_id_seq OWNER TO postgres;

--
-- Name: actividad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE actividad_id_seq OWNED BY actividad.id;


--
-- Name: alimentacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE alimentacion (
    id bigint NOT NULL,
    pasto_corte_tipo1 character varying,
    pasto_corte_hectarias1 double precision,
    pasto_corte_tipo2 character varying,
    pasto_corte_hectareas2 double precision,
    bracharia_tipo boolean,
    bracharia_hectareas double precision,
    estrella_tipo boolean,
    estrella_hectareas double precision,
    guinea_tipo boolean,
    guinea_hectareas double precision,
    aleman_tipo boolean,
    aleman_hectareas double precision,
    cana_azucar_tipo character varying,
    cana_azucar_hectareas double precision,
    num_potreros_tipo integer,
    num_potreros_area_promedio double precision,
    silos double precision,
    silos_cultivo character varying,
    toneladas_silos_cosechadas double precision,
    toneladas_silos_cosechadas_obsv text,
    suministra_minerales boolean,
    suministra_minerales_kgs character varying,
    suministra_concentrado boolean,
    suministra_concentrado_kgs character varying,
    id_finca bigint,
    fecha date
);


ALTER TABLE alimentacion OWNER TO postgres;

--
-- Name: alimentacion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE alimentacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE alimentacion_id_seq OWNER TO postgres;

--
-- Name: alimentacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE alimentacion_id_seq OWNED BY alimentacion.id;


--
-- Name: carne; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE carne (
    id bigint NOT NULL,
    id_finca bigint,
    num_animales integer,
    peso_prom_venta double precision,
    edad_para_venta integer,
    fecha date
);


ALTER TABLE carne OWNER TO postgres;

--
-- Name: carne_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE carne_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE carne_id_seq OWNER TO postgres;

--
-- Name: condicion_via; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE condicion_via (
    id bigint NOT NULL,
    descripcion character varying
);


ALTER TABLE condicion_via OWNER TO postgres;

--
-- Name: condicion_via_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE condicion_via_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE condicion_via_id_seq OWNER TO postgres;

--
-- Name: condicion_via_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE condicion_via_id_seq OWNED BY condicion_via.id;


--
-- Name: destino; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE destino (
    id bigint NOT NULL,
    id_finca bigint,
    num_autoconsumo integer,
    num_cria integer,
    num_levante integer,
    num_ceba integer,
    num_reproduccion integer,
    fecha date
);


ALTER TABLE destino OWNER TO postgres;

--
-- Name: destino_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE destino_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE destino_id_seq OWNER TO postgres;

--
-- Name: financiamiento; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE financiamiento (
    id bigint NOT NULL,
    id_finca bigint,
    banco_institucion boolean,
    reque_vacas boolean,
    reque_novillas boolean,
    fecha date
);


ALTER TABLE financiamiento OWNER TO postgres;

--
-- Name: financiamiento_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE financiamiento_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE financiamiento_id_seq OWNER TO postgres;

--
-- Name: finca; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE finca (
    id bigint NOT NULL,
    ubicacion text,
    id_parroquia bigint,
    id_sector bigint,
    id_caserio bigint,
    gps_utm_norte character varying(255) DEFAULT NULL::character varying,
    gps_utm_este character varying(255) DEFAULT NULL::character varying,
    id_condicion_via bigint,
    documento_inti character varying(255) DEFAULT NULL::character varying,
    hierro_insai character varying(255) DEFAULT NULL::character varying,
    visible boolean,
    nombre character varying
);


ALTER TABLE finca OWNER TO postgres;

--
-- Name: finca_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE finca_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE finca_id_seq OWNER TO postgres;

--
-- Name: fuente_agua; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE fuente_agua (
    id bigint NOT NULL,
    id_finca bigint,
    pozo boolean,
    represa boolean,
    acueducto boolean,
    laguna boolean,
    rio_quebrada boolean,
    manantial boolean,
    publico boolean,
    privado boolean,
    fecha date
);


ALTER TABLE fuente_agua OWNER TO postgres;

--
-- Name: fuente_agua_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE fuente_agua_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE fuente_agua_id_seq OWNER TO postgres;

--
-- Name: manejo_reproductivo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE manejo_reproductivo (
    id bigint NOT NULL,
    id_finca bigint,
    tecn_monta_nat boolean,
    tecn_monta_controlada boolean,
    tecn_inseminacion boolean,
    tecn_transf_embriones boolean,
    fecha date
);


ALTER TABLE manejo_reproductivo OWNER TO postgres;

--
-- Name: manejo_reproductivo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE manejo_reproductivo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE manejo_reproductivo_id_seq OWNER TO postgres;

--
-- Name: nivel_educacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE nivel_educacion (
    id bigint NOT NULL,
    descripcion character varying
);


ALTER TABLE nivel_educacion OWNER TO postgres;

--
-- Name: nivel_educacion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE nivel_educacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE nivel_educacion_id_seq OWNER TO postgres;

--
-- Name: nivel_educacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE nivel_educacion_id_seq OWNED BY nivel_educacion.id;


--
-- Name: ordeno; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE ordeno (
    id bigint NOT NULL,
    id_finca bigint,
    num_vacas_ordenadas integer,
    lts_leche double precision,
    num_ordenos_al_dia integer,
    num_autoconsumo integer,
    num_receptoria integer,
    num_queseras integer,
    num_queso_finca integer,
    fecha date
);


ALTER TABLE ordeno OWNER TO postgres;

--
-- Name: ordeno_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE ordeno_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE ordeno_id_seq OWNER TO postgres;

--
-- Name: otras_especie; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE otras_especie (
    id bigint NOT NULL,
    id_finca bigint,
    num_bufalinos_butoros integer,
    num_bufalinos_bufalas integer,
    num_bufalinos_bubillos integer,
    num_bufalinos_bumautes integer,
    num_bufalinos_bucerros integer,
    num_caprinos_cabrio integer,
    num_caprinos_cabra integer,
    num_caprinos_cabritones integer,
    num_caprinos_cabritonas integer,
    num_caprinos_cabritos integer,
    num_ovinos_carnero integer,
    num_ovinos_oveja integer,
    num_ovinos_borregos integer,
    num_ovinos_borregas integer,
    num_ovinos_corderos integer,
    fecha date
);


ALTER TABLE otras_especie OWNER TO postgres;

--
-- Name: otras_especie_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE otras_especie_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE otras_especie_id_seq OWNER TO postgres;

--
-- Name: productor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE productor (
    id bigint NOT NULL,
    nombre character varying,
    apellido character varying,
    rif character varying,
    tlf1 character varying,
    tlf2 character varying,
    emal1 character varying,
    email2 character varying,
    id_nivel_educacion bigint,
    sabe_leer boolean,
    ex_productor integer,
    lugar_habitacion text,
    visible boolean
);


ALTER TABLE productor OWNER TO postgres;

--
-- Name: productor_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE productor_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE productor_id_seq OWNER TO postgres;

--
-- Name: productor_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE productor_id_seq OWNED BY productor.id;


--
-- Name: raza_predominante; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE raza_predominante (
    id bigint NOT NULL,
    id_finca bigint,
    num_cebu integer,
    num_criollo integer,
    num_hulstein integer,
    num_p_suizo integer,
    num_mestizo integer,
    num_otro integer,
    fecha date,
    num_toros integer,
    num_toros_reproductores integer,
    num_vacas_produccion integer,
    num_vacas_secas integer,
    num_novillos integer,
    num_novillas integer,
    num_mautes integer,
    num_mautas integer,
    num_becerros integer,
    num_becerras integer
);


ALTER TABLE raza_predominante OWNER TO postgres;

--
-- Name: raza_predominante_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE raza_predominante_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE raza_predominante_id_seq OWNER TO postgres;

--
-- Name: registro; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE registro (
    id bigint NOT NULL,
    id_finca bigint,
    registro_parto boolean,
    registro_secado boolean,
    peso_nacer boolean,
    peso_destete boolean,
    peso_ano boolean,
    pasaje_leche boolean,
    observaciones text,
    mensual integer,
    semanal integer,
    diario integer,
    fecha date
);


ALTER TABLE registro OWNER TO postgres;

--
-- Name: registro_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE registro_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE registro_id_seq OWNER TO postgres;

--
-- Name: sanidad_animal; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE sanidad_animal (
    id bigint NOT NULL,
    id_finca bigint,
    recibe_asistencia boolean,
    asistencia_persona character varying(30) DEFAULT NULL::character varying,
    aftosa_fecha date,
    rabia_fecha date,
    leptospira_fecha date,
    virales_fecha date,
    clostridiales_fecha date,
    brucella_fecha date,
    triple_fecha date,
    otra_fecha date,
    otra_descripcion character varying(30) DEFAULT NULL::character varying,
    endoparasitos_tipo character varying(30) DEFAULT NULL::character varying,
    endoparasitos_frecuencia integer,
    ectoparasitos_tipo character varying(30) DEFAULT NULL::character varying,
    ectoparasitos_frecuencia integer,
    prueba_brucella date,
    prueba_leptospira date,
    prueba_otra date,
    prueba_otra_descripcion character varying(30) DEFAULT NULL::character varying,
    secado_vaca_natural boolean,
    secado_vaca_inducido boolean,
    secado_vaca_producto character varying(30) DEFAULT NULL::character varying,
    fecha date
);


ALTER TABLE sanidad_animal OWNER TO postgres;

--
-- Name: sanidad_animal_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sanidad_animal_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE sanidad_animal_id_seq OWNER TO postgres;

--
-- Name: sistema_riego; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE sistema_riego (
    id bigint NOT NULL,
    id_finca bigint,
    riego boolean,
    tiporiego_gravedad boolean,
    tiporiego_aspersion boolean,
    tiporiego_microaspersion boolean,
    tiporiego_goteo boolean,
    tiporiego_otro boolean,
    num_superficie integer,
    num_motobomba integer,
    num_capacidad_flujo integer,
    condiciones character varying(255) DEFAULT NULL::character varying,
    fecha date
);


ALTER TABLE sistema_riego OWNER TO postgres;

--
-- Name: sistema_riego_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE sistema_riego_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE sistema_riego_id_seq OWNER TO postgres;

--
-- Name: superficie; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE superficie (
    id bigint NOT NULL,
    fecha date,
    superficie_riego character varying,
    superficie_aprovechable character varying,
    superficie_no_aprovechable character varying,
    superficie_produccion character varying,
    superficie_sembrada character varying,
    id_finca bigint
);


ALTER TABLE superficie OWNER TO postgres;

--
-- Name: superficie_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE superficie_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE superficie_id_seq OWNER TO postgres;

--
-- Name: superficie_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE superficie_id_seq OWNED BY superficie.id;


--
-- Name: tipo_explotacion; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tipo_explotacion (
    id bigint NOT NULL,
    numero_vaca_becerro integer,
    numero_vaca_maute integer,
    numero_vaca_novillo integer,
    leche boolean,
    carne boolean,
    doble_proposito boolean,
    extensivo boolean,
    intesivo boolean,
    semi_intensivo boolean,
    id_finca bigint,
    fecha date
);


ALTER TABLE tipo_explotacion OWNER TO postgres;

--
-- Name: tipo_explotacion_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_explotacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipo_explotacion_id_seq OWNER TO postgres;

--
-- Name: tipo_explotacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipo_explotacion_id_seq OWNED BY tipo_explotacion.id;


--
-- Data for Name: actividad; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY actividad (id, corrales_cantidad, corrales_observaciones, manga_cantidad, manga_observaciones, bretes_cantidad, bretes_observaciones, romana_cantidad, romana_observaciones, sala_ordeno_cantidad, sala_ordeno_observaciones, bebederos_cantidad, bebederos_observaciones, comederos_cantidad, comederos_observaciones, cerco_electrico_cantidad, cerco_electrico_observaciones, num_potreros_cantidad, num_potreros_observaciones, has_x_potreros_cantidad, has_x_potreros_observaciones, planta_electrica_cantidad, planta_electrica_observaciones, tractores_4x2_cantidad, tractores_4x2_observaciones, tractores_4x4_cantidad, tractores_4x4_observaciones, galpones_cantidad, galpones_observaciones, silos_cantidad, silos_observaciones, sembradora_cantidad, sembradora_observaciones, cosechadora_cantidad, cosechadora_observaciones, asperjadora_cantidad, asperjadora_observaciones, carreta_zorra_cantidad, carreta_zorra_observaciones, rotativa_cantidad, rotativa_observaciones, rolo_cantidad, rolo_observaciones, arado_cantidad, arado_observaciones, surcadora_cantidad, surcadora_observaciones, abonadora_cantidad, abonadora_observaciones, embutidora_cantidad, embutidora_observaciones, vagon_forrajero_cantidad, vagon_forrajero_observaciones, bolsas_ensilar_cantidad, bolsas_ensilar_observaciones, mecanico_cantidad, mecanico_observaciones, manual_cantidad, manual_observaciones, tanque_frio_cantidad, tanque_frio_observaciones, cantaras_cantidad, cantaras_observaciones, filtros_tela_cantidad, filtros_tela_observaciones, paletas_cmt_cantidad, paletas_cmt_observaciones, paletas_fondo_negro_cantidad, paletas_fondo_negro_observaciones, reactivo_cmt_cantidad, reactivo_cmt_observaciones, ordeno_techo_cantidad, ordeno_techo_observaciones, ordeno_piso_cemento_cantidad, ordeno_piso_cemento_observaciones, tanque_nitrogeno_cantidad, tanque_nitrogeno_observaciones, caja_inseminacion_cantidad, caja_inseminacion_observacion, pistoleta_inseminacion_cantidad, pistoleta_inseminacion_observaciones, termo_descongelar_pajuelas_cantidad, termo_descongelar_pajuelas_observaciones, id_finca, fecha) FROM stdin;
\.


--
-- Name: actividad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('actividad_id_seq', 1, false);


--
-- Data for Name: alimentacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY alimentacion (id, pasto_corte_tipo1, pasto_corte_hectarias1, pasto_corte_tipo2, pasto_corte_hectareas2, bracharia_tipo, bracharia_hectareas, estrella_tipo, estrella_hectareas, guinea_tipo, guinea_hectareas, aleman_tipo, aleman_hectareas, cana_azucar_tipo, cana_azucar_hectareas, num_potreros_tipo, num_potreros_area_promedio, silos, silos_cultivo, toneladas_silos_cosechadas, toneladas_silos_cosechadas_obsv, suministra_minerales, suministra_minerales_kgs, suministra_concentrado, suministra_concentrado_kgs, id_finca, fecha) FROM stdin;
\.


--
-- Name: alimentacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('alimentacion_id_seq', 1, false);


--
-- Data for Name: carne; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY carne (id, id_finca, num_animales, peso_prom_venta, edad_para_venta, fecha) FROM stdin;
\.


--
-- Name: carne_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('carne_id_seq', 1, false);


--
-- Data for Name: condicion_via; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY condicion_via (id, descripcion) FROM stdin;
1	\N
\.


--
-- Name: condicion_via_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('condicion_via_id_seq', 2, true);


--
-- Data for Name: destino; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY destino (id, id_finca, num_autoconsumo, num_cria, num_levante, num_ceba, num_reproduccion, fecha) FROM stdin;
\.


--
-- Name: destino_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('destino_id_seq', 1, false);


--
-- Data for Name: financiamiento; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY financiamiento (id, id_finca, banco_institucion, reque_vacas, reque_novillas, fecha) FROM stdin;
\.


--
-- Name: financiamiento_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('financiamiento_id_seq', 1, false);


--
-- Data for Name: finca; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY finca (id, ubicacion, id_parroquia, id_sector, id_caserio, gps_utm_norte, gps_utm_este, id_condicion_via, documento_inti, hierro_insai, visible, nombre) FROM stdin;
4	sdfsdf	2	3	21	213	121	12	12	12	t	fvbcvbcvb
5	xzc	-1	1	1	56362	32131	12312	dvb	xdvxcvxcv	f	cxvx
\.


--
-- Name: finca_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('finca_id_seq', 5, true);


--
-- Data for Name: fuente_agua; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY fuente_agua (id, id_finca, pozo, represa, acueducto, laguna, rio_quebrada, manantial, publico, privado, fecha) FROM stdin;
1	4	t	t	t	t	t	t	t	t	2011-01-01
\.


--
-- Name: fuente_agua_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('fuente_agua_id_seq', 1, true);


--
-- Data for Name: manejo_reproductivo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY manejo_reproductivo (id, id_finca, tecn_monta_nat, tecn_monta_controlada, tecn_inseminacion, tecn_transf_embriones, fecha) FROM stdin;
\.


--
-- Name: manejo_reproductivo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('manejo_reproductivo_id_seq', 1, false);


--
-- Data for Name: nivel_educacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY nivel_educacion (id, descripcion) FROM stdin;
\.


--
-- Name: nivel_educacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('nivel_educacion_id_seq', 1, false);


--
-- Data for Name: ordeno; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY ordeno (id, id_finca, num_vacas_ordenadas, lts_leche, num_ordenos_al_dia, num_autoconsumo, num_receptoria, num_queseras, num_queso_finca, fecha) FROM stdin;
\.


--
-- Name: ordeno_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('ordeno_id_seq', 1, false);


--
-- Data for Name: otras_especie; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY otras_especie (id, id_finca, num_bufalinos_butoros, num_bufalinos_bufalas, num_bufalinos_bubillos, num_bufalinos_bumautes, num_bufalinos_bucerros, num_caprinos_cabrio, num_caprinos_cabra, num_caprinos_cabritones, num_caprinos_cabritonas, num_caprinos_cabritos, num_ovinos_carnero, num_ovinos_oveja, num_ovinos_borregos, num_ovinos_borregas, num_ovinos_corderos, fecha) FROM stdin;
\.


--
-- Name: otras_especie_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('otras_especie_id_seq', 1, false);


--
-- Data for Name: productor; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY productor (id, nombre, apellido, rif, tlf1, tlf2, emal1, email2, id_nivel_educacion, sabe_leer, ex_productor, lugar_habitacion, visible) FROM stdin;
1	\N	\N	\N	\N	\N	\N	\N	\N	f	4	\N	f
\.


--
-- Name: productor_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('productor_id_seq', 1, true);


--
-- Data for Name: raza_predominante; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY raza_predominante (id, id_finca, num_cebu, num_criollo, num_hulstein, num_p_suizo, num_mestizo, num_otro, fecha, num_toros, num_toros_reproductores, num_vacas_produccion, num_vacas_secas, num_novillos, num_novillas, num_mautes, num_mautas, num_becerros, num_becerras) FROM stdin;
\.


--
-- Name: raza_predominante_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('raza_predominante_id_seq', 1, false);


--
-- Data for Name: registro; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY registro (id, id_finca, registro_parto, registro_secado, peso_nacer, peso_destete, peso_ano, pasaje_leche, observaciones, mensual, semanal, diario, fecha) FROM stdin;
\.


--
-- Name: registro_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('registro_id_seq', 1, false);


--
-- Data for Name: sanidad_animal; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY sanidad_animal (id, id_finca, recibe_asistencia, asistencia_persona, aftosa_fecha, rabia_fecha, leptospira_fecha, virales_fecha, clostridiales_fecha, brucella_fecha, triple_fecha, otra_fecha, otra_descripcion, endoparasitos_tipo, endoparasitos_frecuencia, ectoparasitos_tipo, ectoparasitos_frecuencia, prueba_brucella, prueba_leptospira, prueba_otra, prueba_otra_descripcion, secado_vaca_natural, secado_vaca_inducido, secado_vaca_producto, fecha) FROM stdin;
\.


--
-- Name: sanidad_animal_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('sanidad_animal_id_seq', 1, false);


--
-- Data for Name: sistema_riego; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY sistema_riego (id, id_finca, riego, tiporiego_gravedad, tiporiego_aspersion, tiporiego_microaspersion, tiporiego_goteo, tiporiego_otro, num_superficie, num_motobomba, num_capacidad_flujo, condiciones, fecha) FROM stdin;
1	\N	f	f	f	f	f	f	\N	\N	\N	\N	2011-01-01
\.


--
-- Name: sistema_riego_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('sistema_riego_id_seq', 1, true);


--
-- Data for Name: superficie; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY superficie (id, fecha, superficie_riego, superficie_aprovechable, superficie_no_aprovechable, superficie_produccion, superficie_sembrada, id_finca) FROM stdin;
\.


--
-- Name: superficie_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('superficie_id_seq', 1, false);


--
-- Data for Name: tipo_explotacion; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_explotacion (id, numero_vaca_becerro, numero_vaca_maute, numero_vaca_novillo, leche, carne, doble_proposito, extensivo, intesivo, semi_intensivo, id_finca, fecha) FROM stdin;
\.


--
-- Name: tipo_explotacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_explotacion_id_seq', 1, false);


--
-- Name: actividad_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT actividad_pkey PRIMARY KEY (id);


--
-- Name: alimentacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alimentacion
    ADD CONSTRAINT alimentacion_pkey PRIMARY KEY (id);


--
-- Name: carne_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carne
    ADD CONSTRAINT carne_pkey PRIMARY KEY (id);


--
-- Name: condicion_via_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY condicion_via
    ADD CONSTRAINT condicion_via_pkey PRIMARY KEY (id);


--
-- Name: destino_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY destino
    ADD CONSTRAINT destino_pkey PRIMARY KEY (id);


--
-- Name: financiamiento_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY financiamiento
    ADD CONSTRAINT financiamiento_pkey PRIMARY KEY (id);


--
-- Name: finca_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY finca
    ADD CONSTRAINT finca_pkey PRIMARY KEY (id);


--
-- Name: fuente_agua_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY fuente_agua
    ADD CONSTRAINT fuente_agua_pkey PRIMARY KEY (id);


--
-- Name: manejo_reproductivo_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY manejo_reproductivo
    ADD CONSTRAINT manejo_reproductivo_pkey PRIMARY KEY (id);


--
-- Name: nivel_educacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY nivel_educacion
    ADD CONSTRAINT nivel_educacion_pkey PRIMARY KEY (id);


--
-- Name: ordeno_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ordeno
    ADD CONSTRAINT ordeno_pkey PRIMARY KEY (id);


--
-- Name: otras_especie_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY otras_especie
    ADD CONSTRAINT otras_especie_pkey PRIMARY KEY (id);


--
-- Name: productor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY productor
    ADD CONSTRAINT productor_pkey PRIMARY KEY (id);


--
-- Name: raza_predominante_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY raza_predominante
    ADD CONSTRAINT raza_predominante_pkey PRIMARY KEY (id);


--
-- Name: registro_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro
    ADD CONSTRAINT registro_pkey PRIMARY KEY (id);


--
-- Name: sanidad_animal_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sanidad_animal
    ADD CONSTRAINT sanidad_animal_pkey PRIMARY KEY (id);


--
-- Name: sistema_riego_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sistema_riego
    ADD CONSTRAINT sistema_riego_pkey PRIMARY KEY (id);


--
-- Name: superficie_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY superficie
    ADD CONSTRAINT superficie_pkey PRIMARY KEY (id);


--
-- Name: tipo_explotacion_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_explotacion
    ADD CONSTRAINT tipo_explotacion_pkey PRIMARY KEY (id);


--
-- Name: idx_1759fcfc4ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1759fcfc4ed703c9 ON ordeno USING btree (id_finca);


--
-- Name: idx_1bffc6b34ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_1bffc6b34ed703c9 ON manejo_reproductivo USING btree (id_finca);


--
-- Name: idx_397ca85b4ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_397ca85b4ed703c9 ON registro USING btree (id_finca);


--
-- Name: idx_43abb0864ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_43abb0864ed703c9 ON alimentacion USING btree (id_finca);


--
-- Name: idx_4cb1765c4ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_4cb1765c4ed703c9 ON fuente_agua USING btree (id_finca);


--
-- Name: idx_597bba014ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_597bba014ed703c9 ON raza_predominante USING btree (id_finca);


--
-- Name: idx_81f64efa4ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_81f64efa4ed703c9 ON destino USING btree (id_finca);


--
-- Name: idx_82bca8704ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_82bca8704ed703c9 ON tipo_explotacion USING btree (id_finca);


--
-- Name: idx_8df2bd064ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_8df2bd064ed703c9 ON actividad USING btree (id_finca);


--
-- Name: idx_af905264ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_af905264ed703c9 ON carne USING btree (id_finca);


--
-- Name: idx_b76b7f674ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_b76b7f674ed703c9 ON sanidad_animal USING btree (id_finca);


--
-- Name: idx_be9ca2f74ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_be9ca2f74ed703c9 ON otras_especie USING btree (id_finca);


--
-- Name: idx_ccf9c6fb4ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_ccf9c6fb4ed703c9 ON financiamiento USING btree (id_finca);


--
-- Name: idx_d4411ef74ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_d4411ef74ed703c9 ON sistema_riego USING btree (id_finca);


--
-- Name: idx_e4de844b4ed703c9; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_e4de844b4ed703c9 ON superficie USING btree (id_finca);


--
-- Name: financiamiento_id_finca_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY financiamiento
    ADD CONSTRAINT financiamiento_id_finca_fkey FOREIGN KEY (id_finca) REFERENCES finca(id) ON UPDATE CASCADE;


--
-- Name: fk_1759fcfc4ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ordeno
    ADD CONSTRAINT fk_1759fcfc4ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_397ca85b4ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY registro
    ADD CONSTRAINT fk_397ca85b4ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_43abb0864ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY alimentacion
    ADD CONSTRAINT fk_43abb0864ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_597bba014ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY raza_predominante
    ADD CONSTRAINT fk_597bba014ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_81f64efa4ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY destino
    ADD CONSTRAINT fk_81f64efa4ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_82bca8704ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_explotacion
    ADD CONSTRAINT fk_82bca8704ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_8df2bd064ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY actividad
    ADD CONSTRAINT fk_8df2bd064ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_af905264ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY carne
    ADD CONSTRAINT fk_af905264ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_b76b7f674ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sanidad_animal
    ADD CONSTRAINT fk_b76b7f674ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fk_be9ca2f74ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY otras_especie
    ADD CONSTRAINT fk_be9ca2f74ed703c9 FOREIGN KEY (id_finca) REFERENCES carne(id);


--
-- Name: fk_e4de844b4ed703c9; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY superficie
    ADD CONSTRAINT fk_e4de844b4ed703c9 FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: fuente_agua_id_finca_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY fuente_agua
    ADD CONSTRAINT fuente_agua_id_finca_fkey FOREIGN KEY (id_finca) REFERENCES finca(id);


--
-- Name: manejo_reproductivo_id_finca_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY manejo_reproductivo
    ADD CONSTRAINT manejo_reproductivo_id_finca_fkey FOREIGN KEY (id_finca) REFERENCES finca(id) ON UPDATE CASCADE;


--
-- Name: productor_id_nivel_educacion_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY productor
    ADD CONSTRAINT productor_id_nivel_educacion_fkey FOREIGN KEY (id_nivel_educacion) REFERENCES nivel_educacion(id);


--
-- Name: sistema_riego_id_finca_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY sistema_riego
    ADD CONSTRAINT sistema_riego_id_finca_fkey FOREIGN KEY (id_finca) REFERENCES finca(id) ON UPDATE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

