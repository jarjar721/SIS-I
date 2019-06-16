--
-- PostgreSQL database dump
--

-- Dumped from database version 11.3 (Ubuntu 11.3-1.pgdg16.04+1)
-- Dumped by pg_dump version 11.3

-- Started on 2019-06-15 20:35:43

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4053 (class 1262 OID 937389)
-- Name: de7cii1u0v9dve; Type: DATABASE; Schema: -; Owner: zesixxdowbqgyx
--

CREATE DATABASE de7cii1u0v9dve WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8';


ALTER DATABASE de7cii1u0v9dve OWNER TO zesixxdowbqgyx;

\connect de7cii1u0v9dve

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 206 (class 1259 OID 7512231)
-- Name: contexto; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.contexto (
    id integer NOT NULL,
    contexto character varying NOT NULL,
    fk_pregunta integer
);


ALTER TABLE public.contexto OWNER TO zesixxdowbqgyx;

--
-- TOC entry 207 (class 1259 OID 7512237)
-- Name: contexto_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.contexto_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.contexto_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4057 (class 0 OID 0)
-- Dependencies: 207
-- Name: contexto_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.contexto_id_seq OWNED BY public.contexto.id;


--
-- TOC entry 208 (class 1259 OID 7512239)
-- Name: evento; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.evento (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    tipo character varying NOT NULL,
    fk_evento integer,
    fk_investigacion integer,
    fk_unidad_informacion integer,
    fk_pregunta integer
);


ALTER TABLE public.evento OWNER TO zesixxdowbqgyx;

--
-- TOC entry 209 (class 1259 OID 7512245)
-- Name: evento_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.evento_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.evento_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4058 (class 0 OID 0)
-- Dependencies: 209
-- Name: evento_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.evento_id_seq OWNED BY public.evento.id;


--
-- TOC entry 210 (class 1259 OID 7512247)
-- Name: indicio; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.indicio (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    fk_sinergia integer
);


ALTER TABLE public.indicio OWNER TO zesixxdowbqgyx;

--
-- TOC entry 211 (class 1259 OID 7512253)
-- Name: indicio_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.indicio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.indicio_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4059 (class 0 OID 0)
-- Dependencies: 211
-- Name: indicio_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.indicio_id_seq OWNED BY public.indicio.id;


--
-- TOC entry 212 (class 1259 OID 7512255)
-- Name: investigacion; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.investigacion (
    id integer NOT NULL,
    titulo character varying NOT NULL,
    fk_usuario integer
);


ALTER TABLE public.investigacion OWNER TO zesixxdowbqgyx;

--
-- TOC entry 213 (class 1259 OID 7512261)
-- Name: investigacion_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.investigacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.investigacion_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4060 (class 0 OID 0)
-- Dependencies: 213
-- Name: investigacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.investigacion_id_seq OWNED BY public.investigacion.id;


--
-- TOC entry 214 (class 1259 OID 7512263)
-- Name: justificacion; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.justificacion (
    id integer NOT NULL,
    argumento character varying NOT NULL,
    tipo_argumento character varying NOT NULL,
    fk_investigacion integer,
    fk_evento integer,
    fk_contexto integer,
    fk_temporalidad integer,
    fk_unidad_estudio integer
);


ALTER TABLE public.justificacion OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4061 (class 0 OID 0)
-- Dependencies: 214
-- Name: COLUMN justificacion.fk_contexto; Type: COMMENT; Schema: public; Owner: zesixxdowbqgyx
--

COMMENT ON COLUMN public.justificacion.fk_contexto IS '
';


--
-- TOC entry 215 (class 1259 OID 7512269)
-- Name: justificacion_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.justificacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.justificacion_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4062 (class 0 OID 0)
-- Dependencies: 215
-- Name: justificacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.justificacion_id_seq OWNED BY public.justificacion.id;


--
-- TOC entry 197 (class 1259 OID 3756496)
-- Name: migrations; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO zesixxdowbqgyx;

--
-- TOC entry 196 (class 1259 OID 3756494)
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.migrations_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4063 (class 0 OID 0)
-- Dependencies: 196
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- TOC entry 216 (class 1259 OID 7512271)
-- Name: objetivo; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.objetivo (
    id integer NOT NULL,
    objetivo character varying NOT NULL,
    tipo character varying NOT NULL,
    fk_objetivo integer,
    fk_investigacion integer,
    fk_pregunta integer
);


ALTER TABLE public.objetivo OWNER TO zesixxdowbqgyx;

--
-- TOC entry 217 (class 1259 OID 7512277)
-- Name: objetivo_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.objetivo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.objetivo_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4064 (class 0 OID 0)
-- Dependencies: 217
-- Name: objetivo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.objetivo_id_seq OWNED BY public.objetivo.id;


--
-- TOC entry 205 (class 1259 OID 5748946)
-- Name: password_resets; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_resets OWNER TO zesixxdowbqgyx;

--
-- TOC entry 218 (class 1259 OID 7512279)
-- Name: pregunta; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.pregunta (
    id integer NOT NULL,
    pregunta character varying NOT NULL,
    tipo character varying NOT NULL,
    fk_pregunta integer,
    fk_investigacion integer
);


ALTER TABLE public.pregunta OWNER TO zesixxdowbqgyx;

--
-- TOC entry 219 (class 1259 OID 7512285)
-- Name: pregunta_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.pregunta_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.pregunta_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4065 (class 0 OID 0)
-- Dependencies: 219
-- Name: pregunta_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.pregunta_id_seq OWNED BY public.pregunta.id;


--
-- TOC entry 201 (class 1259 OID 3757207)
-- Name: privilegio; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.privilegio (
    code bigint NOT NULL,
    tipo character varying(255) NOT NULL
);


ALTER TABLE public.privilegio OWNER TO zesixxdowbqgyx;

--
-- TOC entry 200 (class 1259 OID 3757205)
-- Name: privilegio_code_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.privilegio_code_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.privilegio_code_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4066 (class 0 OID 0)
-- Dependencies: 200
-- Name: privilegio_code_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.privilegio_code_seq OWNED BY public.privilegio.code;


--
-- TOC entry 199 (class 1259 OID 3757161)
-- Name: rol; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.rol (
    code bigint NOT NULL,
    nombre character varying(255) NOT NULL
);


ALTER TABLE public.rol OWNER TO zesixxdowbqgyx;

--
-- TOC entry 202 (class 1259 OID 3757213)
-- Name: rol-pri; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public."rol-pri" (
    codigo_rol integer NOT NULL,
    codigo_pri integer NOT NULL
);


ALTER TABLE public."rol-pri" OWNER TO zesixxdowbqgyx;

--
-- TOC entry 198 (class 1259 OID 3757159)
-- Name: rol_code_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.rol_code_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.rol_code_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4067 (class 0 OID 0)
-- Dependencies: 198
-- Name: rol_code_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.rol_code_seq OWNED BY public.rol.code;


--
-- TOC entry 220 (class 1259 OID 7512287)
-- Name: sinergia; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.sinergia (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    fk_evento integer
);


ALTER TABLE public.sinergia OWNER TO zesixxdowbqgyx;

--
-- TOC entry 221 (class 1259 OID 7512293)
-- Name: sinergia_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.sinergia_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sinergia_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4068 (class 0 OID 0)
-- Dependencies: 221
-- Name: sinergia_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.sinergia_id_seq OWNED BY public.sinergia.id;


--
-- TOC entry 222 (class 1259 OID 7512295)
-- Name: temporalidad; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.temporalidad (
    id integer NOT NULL,
    fecha_inicio date NOT NULL,
    fk_pregunta integer,
    fecha_fin date NOT NULL
);


ALTER TABLE public.temporalidad OWNER TO zesixxdowbqgyx;

--
-- TOC entry 223 (class 1259 OID 7512298)
-- Name: temporalidad_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.temporalidad_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.temporalidad_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4069 (class 0 OID 0)
-- Dependencies: 223
-- Name: temporalidad_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.temporalidad_id_seq OWNED BY public.temporalidad.id;


--
-- TOC entry 224 (class 1259 OID 7512300)
-- Name: unidad_estudio; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.unidad_estudio (
    id integer NOT NULL,
    unidad_estudio character varying NOT NULL,
    fk_pregunta integer
);


ALTER TABLE public.unidad_estudio OWNER TO zesixxdowbqgyx;

--
-- TOC entry 225 (class 1259 OID 7512306)
-- Name: unidad_estudio_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.unidad_estudio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.unidad_estudio_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4070 (class 0 OID 0)
-- Dependencies: 225
-- Name: unidad_estudio_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.unidad_estudio_id_seq OWNED BY public.unidad_estudio.id;


--
-- TOC entry 226 (class 1259 OID 7512308)
-- Name: unidad_informacion; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.unidad_informacion (
    id integer NOT NULL,
    categoria character varying NOT NULL,
    cita character varying NOT NULL,
    referencia character varying NOT NULL,
    nivel character varying NOT NULL,
    ubicacion_referencia character varying,
    fk_unidad_informacion integer,
    fk_investigacion integer,
    fk_evento integer,
    fk_justificacion integer
);


ALTER TABLE public.unidad_informacion OWNER TO zesixxdowbqgyx;

--
-- TOC entry 227 (class 1259 OID 7512314)
-- Name: unidad_informacion_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.unidad_informacion_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.unidad_informacion_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4071 (class 0 OID 0)
-- Dependencies: 227
-- Name: unidad_informacion_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.unidad_informacion_id_seq OWNED BY public.unidad_informacion.id;


--
-- TOC entry 204 (class 1259 OID 5748935)
-- Name: usuario; Type: TABLE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE TABLE public.usuario (
    id bigint NOT NULL,
    username character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    fk_rol integer NOT NULL,
    image character varying DEFAULT 'user.png'::character varying NOT NULL
);


ALTER TABLE public.usuario OWNER TO zesixxdowbqgyx;

--
-- TOC entry 203 (class 1259 OID 5748933)
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: zesixxdowbqgyx
--

CREATE SEQUENCE public.usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_seq OWNER TO zesixxdowbqgyx;

--
-- TOC entry 4072 (class 0 OID 0)
-- Dependencies: 203
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: zesixxdowbqgyx
--

ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;


--
-- TOC entry 3810 (class 2604 OID 7512316)
-- Name: contexto id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.contexto ALTER COLUMN id SET DEFAULT nextval('public.contexto_id_seq'::regclass);


--
-- TOC entry 3811 (class 2604 OID 7512317)
-- Name: evento id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.evento ALTER COLUMN id SET DEFAULT nextval('public.evento_id_seq'::regclass);


--
-- TOC entry 3812 (class 2604 OID 7512318)
-- Name: indicio id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.indicio ALTER COLUMN id SET DEFAULT nextval('public.indicio_id_seq'::regclass);


--
-- TOC entry 3813 (class 2604 OID 7512319)
-- Name: investigacion id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.investigacion ALTER COLUMN id SET DEFAULT nextval('public.investigacion_id_seq'::regclass);


--
-- TOC entry 3814 (class 2604 OID 7512320)
-- Name: justificacion id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.justificacion ALTER COLUMN id SET DEFAULT nextval('public.justificacion_id_seq'::regclass);


--
-- TOC entry 3805 (class 2604 OID 3756499)
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- TOC entry 3815 (class 2604 OID 7512321)
-- Name: objetivo id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.objetivo ALTER COLUMN id SET DEFAULT nextval('public.objetivo_id_seq'::regclass);


--
-- TOC entry 3816 (class 2604 OID 7512322)
-- Name: pregunta id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.pregunta ALTER COLUMN id SET DEFAULT nextval('public.pregunta_id_seq'::regclass);


--
-- TOC entry 3807 (class 2604 OID 3757210)
-- Name: privilegio code; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.privilegio ALTER COLUMN code SET DEFAULT nextval('public.privilegio_code_seq'::regclass);


--
-- TOC entry 3806 (class 2604 OID 3757164)
-- Name: rol code; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.rol ALTER COLUMN code SET DEFAULT nextval('public.rol_code_seq'::regclass);


--
-- TOC entry 3817 (class 2604 OID 7512323)
-- Name: sinergia id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.sinergia ALTER COLUMN id SET DEFAULT nextval('public.sinergia_id_seq'::regclass);


--
-- TOC entry 3818 (class 2604 OID 7512324)
-- Name: temporalidad id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.temporalidad ALTER COLUMN id SET DEFAULT nextval('public.temporalidad_id_seq'::regclass);


--
-- TOC entry 3819 (class 2604 OID 7512325)
-- Name: unidad_estudio id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_estudio ALTER COLUMN id SET DEFAULT nextval('public.unidad_estudio_id_seq'::regclass);


--
-- TOC entry 3820 (class 2604 OID 7512326)
-- Name: unidad_informacion id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_informacion ALTER COLUMN id SET DEFAULT nextval('public.unidad_informacion_id_seq'::regclass);


--
-- TOC entry 3808 (class 2604 OID 5748938)
-- Name: usuario id; Type: DEFAULT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);


--
-- TOC entry 4026 (class 0 OID 7512231)
-- Dependencies: 206
-- Data for Name: contexto; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4028 (class 0 OID 7512239)
-- Dependencies: 208
-- Data for Name: evento; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4030 (class 0 OID 7512247)
-- Dependencies: 210
-- Data for Name: indicio; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4032 (class 0 OID 7512255)
-- Dependencies: 212
-- Data for Name: investigacion; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4034 (class 0 OID 7512263)
-- Dependencies: 214
-- Data for Name: justificacion; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4017 (class 0 OID 3756496)
-- Dependencies: 197
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--

INSERT INTO public.migrations (id, migration, batch) VALUES (3, '2019_05_26_200535_create_rol_table', 2);
INSERT INTO public.migrations (id, migration, batch) VALUES (4, '2019_05_26_201023_create_privilegio_table', 3);
INSERT INTO public.migrations (id, migration, batch) VALUES (5, '2019_05_26_201024_create_rol-pri_table', 3);
INSERT INTO public.migrations (id, migration, batch) VALUES (8, '2014_10_12_000000_create_usuario_table', 4);
INSERT INTO public.migrations (id, migration, batch) VALUES (9, '2014_10_12_100000_create_password_resets_table', 4);
INSERT INTO public.migrations (id, migration, batch) VALUES (10, '2019_06_09_195518_create_enunciado_holopraxicos_table', 4);
INSERT INTO public.migrations (id, migration, batch) VALUES (11, '2019_06_09_221119_create_cuestionarios_table', 4);


--
-- TOC entry 4036 (class 0 OID 7512271)
-- Dependencies: 216
-- Data for Name: objetivo; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4025 (class 0 OID 5748946)
-- Dependencies: 205
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4038 (class 0 OID 7512279)
-- Dependencies: 218
-- Data for Name: pregunta; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4021 (class 0 OID 3757207)
-- Dependencies: 201
-- Data for Name: privilegio; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--

INSERT INTO public.privilegio (code, tipo) VALUES (1, 'Control Roles');


--
-- TOC entry 4019 (class 0 OID 3757161)
-- Dependencies: 199
-- Data for Name: rol; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--

INSERT INTO public.rol (code, nombre) VALUES (1, 'Admin');
INSERT INTO public.rol (code, nombre) VALUES (2, 'Investigador');


--
-- TOC entry 4022 (class 0 OID 3757213)
-- Dependencies: 202
-- Data for Name: rol-pri; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--

INSERT INTO public."rol-pri" (codigo_rol, codigo_pri) VALUES (1, 1);


--
-- TOC entry 4040 (class 0 OID 7512287)
-- Dependencies: 220
-- Data for Name: sinergia; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4042 (class 0 OID 7512295)
-- Dependencies: 222
-- Data for Name: temporalidad; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4044 (class 0 OID 7512300)
-- Dependencies: 224
-- Data for Name: unidad_estudio; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4046 (class 0 OID 7512308)
-- Dependencies: 226
-- Data for Name: unidad_informacion; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--



--
-- TOC entry 4024 (class 0 OID 5748935)
-- Dependencies: 204
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: zesixxdowbqgyx
--

INSERT INTO public.usuario (id, username, email, password, email_verified_at, remember_token, created_at, updated_at, fk_rol, image) VALUES (1, 'Adriadmin', 'adriadmin@db.com', '$2y$10$EmtftAuhFw.WZrmS8jKjEOM/OzQOGNLpLuoEQ8jkuEyGuQbrKWbs6', NULL, NULL, '2019-06-14 18:07:14', '2019-06-14 18:07:14', 1, 'user.png');


--
-- TOC entry 4073 (class 0 OID 0)
-- Dependencies: 207
-- Name: contexto_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.contexto_id_seq', 1, false);


--
-- TOC entry 4074 (class 0 OID 0)
-- Dependencies: 209
-- Name: evento_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.evento_id_seq', 1, false);


--
-- TOC entry 4075 (class 0 OID 0)
-- Dependencies: 211
-- Name: indicio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.indicio_id_seq', 1, false);


--
-- TOC entry 4076 (class 0 OID 0)
-- Dependencies: 213
-- Name: investigacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.investigacion_id_seq', 1, false);


--
-- TOC entry 4077 (class 0 OID 0)
-- Dependencies: 215
-- Name: justificacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.justificacion_id_seq', 1, false);


--
-- TOC entry 4078 (class 0 OID 0)
-- Dependencies: 196
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.migrations_id_seq', 11, true);


--
-- TOC entry 4079 (class 0 OID 0)
-- Dependencies: 217
-- Name: objetivo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.objetivo_id_seq', 1, false);


--
-- TOC entry 4080 (class 0 OID 0)
-- Dependencies: 219
-- Name: pregunta_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.pregunta_id_seq', 1, false);


--
-- TOC entry 4081 (class 0 OID 0)
-- Dependencies: 200
-- Name: privilegio_code_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.privilegio_code_seq', 1, false);


--
-- TOC entry 4082 (class 0 OID 0)
-- Dependencies: 198
-- Name: rol_code_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.rol_code_seq', 1, false);


--
-- TOC entry 4083 (class 0 OID 0)
-- Dependencies: 221
-- Name: sinergia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.sinergia_id_seq', 1, false);


--
-- TOC entry 4084 (class 0 OID 0)
-- Dependencies: 223
-- Name: temporalidad_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.temporalidad_id_seq', 1, false);


--
-- TOC entry 4085 (class 0 OID 0)
-- Dependencies: 225
-- Name: unidad_estudio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.unidad_estudio_id_seq', 1, false);


--
-- TOC entry 4086 (class 0 OID 0)
-- Dependencies: 227
-- Name: unidad_informacion_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.unidad_informacion_id_seq', 1, false);


--
-- TOC entry 4087 (class 0 OID 0)
-- Dependencies: 203
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: zesixxdowbqgyx
--

SELECT pg_catalog.setval('public.usuario_id_seq', 1, true);


--
-- TOC entry 3828 (class 2606 OID 4348131)
-- Name: rol-pri codigo; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public."rol-pri"
    ADD CONSTRAINT codigo PRIMARY KEY (codigo_rol, codigo_pri);


--
-- TOC entry 3836 (class 2606 OID 7512328)
-- Name: contexto contexto_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.contexto
    ADD CONSTRAINT contexto_pkey PRIMARY KEY (id);


--
-- TOC entry 3839 (class 2606 OID 7512330)
-- Name: evento evento_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT evento_pkey PRIMARY KEY (id);


--
-- TOC entry 3844 (class 2606 OID 7512332)
-- Name: indicio indicio_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.indicio
    ADD CONSTRAINT indicio_pkey PRIMARY KEY (id);


--
-- TOC entry 3847 (class 2606 OID 7512334)
-- Name: investigacion investigacion_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.investigacion
    ADD CONSTRAINT investigacion_pkey PRIMARY KEY (id);


--
-- TOC entry 3850 (class 2606 OID 7512336)
-- Name: justificacion justificacion_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.justificacion
    ADD CONSTRAINT justificacion_pkey PRIMARY KEY (id);


--
-- TOC entry 3822 (class 2606 OID 3756501)
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- TOC entry 3853 (class 2606 OID 7512338)
-- Name: objetivo objetivo_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.objetivo
    ADD CONSTRAINT objetivo_pkey PRIMARY KEY (id);


--
-- TOC entry 3856 (class 2606 OID 7512340)
-- Name: pregunta pregunta_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.pregunta
    ADD CONSTRAINT pregunta_pkey PRIMARY KEY (id);


--
-- TOC entry 3826 (class 2606 OID 3757212)
-- Name: privilegio privilegio_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.privilegio
    ADD CONSTRAINT privilegio_pkey PRIMARY KEY (code);


--
-- TOC entry 3824 (class 2606 OID 3757166)
-- Name: rol rol_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.rol
    ADD CONSTRAINT rol_pkey PRIMARY KEY (code);


--
-- TOC entry 3858 (class 2606 OID 7512342)
-- Name: sinergia sinergia_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.sinergia
    ADD CONSTRAINT sinergia_pkey PRIMARY KEY (id);


--
-- TOC entry 3861 (class 2606 OID 7512344)
-- Name: temporalidad temporalidad_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.temporalidad
    ADD CONSTRAINT temporalidad_pkey PRIMARY KEY (id);


--
-- TOC entry 3863 (class 2606 OID 7512346)
-- Name: unidad_estudio unidad_estudio_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_estudio
    ADD CONSTRAINT unidad_estudio_pkey PRIMARY KEY (id);


--
-- TOC entry 3869 (class 2606 OID 7512348)
-- Name: unidad_informacion unidad_informacion_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT unidad_informacion_pkey PRIMARY KEY (id);


--
-- TOC entry 3831 (class 2606 OID 5748945)
-- Name: usuario usuario_email_unique; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_email_unique UNIQUE (email);


--
-- TOC entry 3833 (class 2606 OID 5748943)
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- TOC entry 3845 (class 1259 OID 7512500)
-- Name: fki_fk_usuario; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_fk_usuario ON public.investigacion USING btree (fk_usuario);


--
-- TOC entry 3829 (class 1259 OID 7513201)
-- Name: fki_foreign_key_rol; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_foreign_key_rol ON public.usuario USING btree (fk_rol);


--
-- TOC entry 3840 (class 1259 OID 7512349)
-- Name: fki_nexo_pregunta; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_nexo_pregunta ON public.evento USING btree (fk_pregunta);


--
-- TOC entry 3854 (class 1259 OID 7512350)
-- Name: fki_recursiva; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_recursiva ON public.pregunta USING btree (fk_pregunta);


--
-- TOC entry 3841 (class 1259 OID 7512351)
-- Name: fki_recursiva_evento; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_recursiva_evento ON public.evento USING btree (fk_evento);


--
-- TOC entry 3864 (class 1259 OID 7512352)
-- Name: fki_recursiva_ui; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_recursiva_ui ON public.unidad_informacion USING btree (fk_unidad_informacion);


--
-- TOC entry 3865 (class 1259 OID 7512353)
-- Name: fki_relacion_evento; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_relacion_evento ON public.unidad_informacion USING btree (fk_evento);


--
-- TOC entry 3866 (class 1259 OID 7512354)
-- Name: fki_relacion_investigacion; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_relacion_investigacion ON public.unidad_informacion USING btree (fk_investigacion);


--
-- TOC entry 3867 (class 1259 OID 7512355)
-- Name: fki_relacion_justificacion; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_relacion_justificacion ON public.unidad_informacion USING btree (fk_justificacion);


--
-- TOC entry 3859 (class 1259 OID 7512356)
-- Name: fki_relacion_oregunta; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_relacion_oregunta ON public.temporalidad USING btree (fk_pregunta);


--
-- TOC entry 3837 (class 1259 OID 7512357)
-- Name: fki_relacion_pregunta; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_relacion_pregunta ON public.contexto USING btree (fk_pregunta);


--
-- TOC entry 3851 (class 1259 OID 7512358)
-- Name: fki_relacion_recursiva; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_relacion_recursiva ON public.objetivo USING btree (fk_objetivo);


--
-- TOC entry 3848 (class 1259 OID 7512359)
-- Name: fki_relacion_temporalidad; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_relacion_temporalidad ON public.justificacion USING btree (fk_temporalidad);


--
-- TOC entry 3842 (class 1259 OID 7512360)
-- Name: fki_relacion_unidad_informacion; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX fki_relacion_unidad_informacion ON public.evento USING btree (fk_unidad_informacion);


--
-- TOC entry 3834 (class 1259 OID 5748952)
-- Name: password_resets_email_index; Type: INDEX; Schema: public; Owner: zesixxdowbqgyx
--

CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);


--
-- TOC entry 3879 (class 2606 OID 7512495)
-- Name: investigacion fk_usuario; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.investigacion
    ADD CONSTRAINT fk_usuario FOREIGN KEY (fk_usuario) REFERENCES public.usuario(id);


--
-- TOC entry 3872 (class 2606 OID 7513196)
-- Name: usuario foreign_key_rol; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT foreign_key_rol FOREIGN KEY (fk_rol) REFERENCES public.rol(code);


--
-- TOC entry 3874 (class 2606 OID 7512361)
-- Name: evento nexo_pregunta; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT nexo_pregunta FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- TOC entry 3886 (class 2606 OID 7512366)
-- Name: pregunta recursiva; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.pregunta
    ADD CONSTRAINT recursiva FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- TOC entry 3875 (class 2606 OID 7512371)
-- Name: evento recursiva_evento; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT recursiva_evento FOREIGN KEY (fk_evento) REFERENCES public.evento(id);


--
-- TOC entry 3891 (class 2606 OID 7512376)
-- Name: unidad_informacion recursiva_ui; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT recursiva_ui FOREIGN KEY (fk_unidad_informacion) REFERENCES public.unidad_informacion(id);


--
-- TOC entry 3887 (class 2606 OID 7512381)
-- Name: pregunta relacion; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.pregunta
    ADD CONSTRAINT relacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- TOC entry 3892 (class 2606 OID 7512386)
-- Name: unidad_informacion relacion_evento; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT relacion_evento FOREIGN KEY (fk_evento) REFERENCES public.evento(id);


--
-- TOC entry 3880 (class 2606 OID 7512391)
-- Name: justificacion relacion_evento; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.justificacion
    ADD CONSTRAINT relacion_evento FOREIGN KEY (fk_evento) REFERENCES public.evento(id);


--
-- TOC entry 3888 (class 2606 OID 7512396)
-- Name: sinergia relacion_evento; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.sinergia
    ADD CONSTRAINT relacion_evento FOREIGN KEY (fk_evento) REFERENCES public.contexto(id);


--
-- TOC entry 3883 (class 2606 OID 7512401)
-- Name: objetivo relacion_investigacion; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.objetivo
    ADD CONSTRAINT relacion_investigacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- TOC entry 3876 (class 2606 OID 7512406)
-- Name: evento relacion_investigacion; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT relacion_investigacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- TOC entry 3893 (class 2606 OID 7512411)
-- Name: unidad_informacion relacion_investigacion; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT relacion_investigacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- TOC entry 3881 (class 2606 OID 7512416)
-- Name: justificacion relacion_investigacion; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.justificacion
    ADD CONSTRAINT relacion_investigacion FOREIGN KEY (fk_investigacion) REFERENCES public.investigacion(id);


--
-- TOC entry 3894 (class 2606 OID 7512421)
-- Name: unidad_informacion relacion_justificacion; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_informacion
    ADD CONSTRAINT relacion_justificacion FOREIGN KEY (fk_justificacion) REFERENCES public.justificacion(id);


--
-- TOC entry 3889 (class 2606 OID 7512426)
-- Name: temporalidad relacion_oregunta; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.temporalidad
    ADD CONSTRAINT relacion_oregunta FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- TOC entry 3884 (class 2606 OID 7512431)
-- Name: objetivo relacion_pregunta; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.objetivo
    ADD CONSTRAINT relacion_pregunta FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- TOC entry 3873 (class 2606 OID 7512436)
-- Name: contexto relacion_pregunta; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.contexto
    ADD CONSTRAINT relacion_pregunta FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- TOC entry 3885 (class 2606 OID 7512441)
-- Name: objetivo relacion_recursiva; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.objetivo
    ADD CONSTRAINT relacion_recursiva FOREIGN KEY (fk_objetivo) REFERENCES public.objetivo(id);


--
-- TOC entry 3878 (class 2606 OID 7512446)
-- Name: indicio relacion_sinergia; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.indicio
    ADD CONSTRAINT relacion_sinergia FOREIGN KEY (fk_sinergia) REFERENCES public.sinergia(id);


--
-- TOC entry 3882 (class 2606 OID 7512451)
-- Name: justificacion relacion_temporalidad; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.justificacion
    ADD CONSTRAINT relacion_temporalidad FOREIGN KEY (fk_temporalidad) REFERENCES public.temporalidad(id);


--
-- TOC entry 3877 (class 2606 OID 7512456)
-- Name: evento relacion_unidad_informacion; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.evento
    ADD CONSTRAINT relacion_unidad_informacion FOREIGN KEY (fk_unidad_informacion) REFERENCES public.unidad_informacion(id);


--
-- TOC entry 3871 (class 2606 OID 3757221)
-- Name: rol-pri rol_pri_fk_privilegio_foreign; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public."rol-pri"
    ADD CONSTRAINT rol_pri_fk_privilegio_foreign FOREIGN KEY (codigo_pri) REFERENCES public.privilegio(code);


--
-- TOC entry 3870 (class 2606 OID 3757216)
-- Name: rol-pri rol_pri_fk_rol_foreign; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public."rol-pri"
    ADD CONSTRAINT rol_pri_fk_rol_foreign FOREIGN KEY (codigo_rol) REFERENCES public.rol(code);


--
-- TOC entry 3890 (class 2606 OID 7512461)
-- Name: unidad_estudio unidad_estudio_fk_pregunta_fkey; Type: FK CONSTRAINT; Schema: public; Owner: zesixxdowbqgyx
--

ALTER TABLE ONLY public.unidad_estudio
    ADD CONSTRAINT unidad_estudio_fk_pregunta_fkey FOREIGN KEY (fk_pregunta) REFERENCES public.pregunta(id);


--
-- TOC entry 4054 (class 0 OID 0)
-- Dependencies: 4053
-- Name: DATABASE de7cii1u0v9dve; Type: ACL; Schema: -; Owner: zesixxdowbqgyx
--

REVOKE CONNECT,TEMPORARY ON DATABASE de7cii1u0v9dve FROM PUBLIC;


--
-- TOC entry 4055 (class 0 OID 0)
-- Dependencies: 3
-- Name: SCHEMA public; Type: ACL; Schema: -; Owner: zesixxdowbqgyx
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO zesixxdowbqgyx;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- TOC entry 4056 (class 0 OID 0)
-- Dependencies: 698
-- Name: LANGUAGE plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO zesixxdowbqgyx;


-- Completed on 2019-06-15 20:37:18

--
-- PostgreSQL database dump complete
--

