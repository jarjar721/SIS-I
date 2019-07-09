
/*CREATE START*/

CREATE TABLE public.evento_ui (
    id integer NOT NULL,
    clase character varying,
    fk_unidad_informacion integer,
    fk_evento integer NOT NULL
);
ALTER TABLE public.evento_ui OWNER TO postgres;
CREATE SEQUENCE public.evento_ui_id_seq
    START WITH 10
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.evento_ui_id_seq OWNER TO postgres;
ALTER SEQUENCE public.evento_ui_id_seq OWNED BY public.evento_ui.id;




CREATE TABLE public.contexto (
    id integer NOT NULL,
    contexto character varying NOT NULL
);
ALTER TABLE public.contexto OWNER TO postgres;
CREATE SEQUENCE public.contexto_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.contexto_id_seq OWNER TO postgres;
ALTER SEQUENCE public.contexto_id_seq OWNED BY public.contexto.id;




CREATE TABLE public.criterio_metodologico (
    id integer NOT NULL,
    tipo_abordaje character varying NOT NULL,
    fk_diseno integer
);
ALTER TABLE public.criterio_metodologico OWNER TO postgres;
CREATE SEQUENCE public.criterio_metodologico_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.criterio_metodologico_id_seq OWNER TO postgres;
ALTER SEQUENCE public.criterio_metodologico_id_seq OWNED BY public.criterio_metodologico.id;



CREATE TABLE public.criterio_metodologico_ui (
    id integer NOT NULL,
    fk_unidad_informacion integer,
    fk_criterio_metodologico integer
);
ALTER TABLE public.criterio_metodologico_ui OWNER TO postgres;
CREATE SEQUENCE public.criterio_metodologico_ui_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.criterio_metodologico_ui_id_seq OWNER TO postgres;
ALTER SEQUENCE public.criterio_metodologico_ui_id_seq OWNED BY public.criterio_metodologico_ui.id;


CREATE TABLE public.diseno (
    id integer NOT NULL,
    temporalidad character varying NOT NULL,
    fk_dimension integer,
    fk_fuente integer, 
    fk_foco integer
);
ALTER TABLE public.diseno OWNER TO postgres;
CREATE SEQUENCE public.diseno_id_seq
    START WITH 65
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.diseno_id_seq OWNER TO postgres;
ALTER SEQUENCE public.diseno_id_seq OWNED BY public.diseno.id;




CREATE TABLE public.evento (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    tipo character varying NOT NULL
);
ALTER TABLE public.evento OWNER TO postgres;
CREATE SEQUENCE public.evento_id_seq
    START WITH 10
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.evento_id_seq OWNER TO postgres;
ALTER SEQUENCE public.evento_id_seq OWNED BY public.evento.id;




CREATE TABLE public.foco (
    id integer NOT NULL,
    variedad character varying NOT NULL,
    agrupacion character varying NOT NULL
);
ALTER TABLE public.foco OWNER TO postgres;
CREATE SEQUENCE public.foco_id_seq
    START WITH 3
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.foco_id_seq OWNER TO postgres;
ALTER SEQUENCE public.foco_id_seq OWNED BY public.foco.id;




CREATE TABLE public.fuente (
    id integer NOT NULL,
    tipo_fuente character varying NOT NULL,
    tipo_diseno character varying NOT NULL,
    ambiente character varying NOT NULL
);
ALTER TABLE public.fuente OWNER TO postgres;
CREATE SEQUENCE public.fuente_id_seq
    START WITH 3
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.fuente_id_seq OWNER TO postgres;
ALTER SEQUENCE public.fuente_id_seq OWNED BY public.fuente.id;




CREATE TABLE public.dimension (
    id integer NOT NULL,
    dimension character varying NOT NULL
);
ALTER TABLE public.dimension OWNER TO postgres;
CREATE SEQUENCE public.dimension_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.dimension_id_seq OWNER TO postgres;
ALTER SEQUENCE public.dimension_id_seq OWNED BY public.dimension.id;



CREATE TABLE public.indicio (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    fk_sinergia integer
);
ALTER TABLE public.indicio OWNER TO postgres;
CREATE SEQUENCE public.indicio_id_seq
    START WITH 81
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.indicio_id_seq OWNER TO postgres;
ALTER SEQUENCE public.indicio_id_seq OWNED BY public.indicio.id;




CREATE TABLE public.institucion (
    id integer NOT NULL,
    nombre character varying NOT NULL
);
ALTER TABLE public.institucion OWNER TO postgres;
CREATE SEQUENCE public.institucion_id_seq
    START WITH 7
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.institucion_id_seq OWNER TO postgres;
ALTER SEQUENCE public.institucion_id_seq OWNED BY public.institucion.id;




CREATE TABLE public.instrumento (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    fk_tecnica_recoleccion integer
);
ALTER TABLE public.instrumento OWNER TO postgres;
CREATE SEQUENCE public.instrumento_id_seq
    START WITH 7
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.instrumento_id_seq OWNER TO postgres;
ALTER SEQUENCE public.instrumento_id_seq OWNED BY public.instrumento.id;




CREATE TABLE public.tecnica_recoleccion (
    id integer NOT NULL,
    nombre character varying NOT NULL
);
ALTER TABLE public.tecnica_recoleccion OWNER TO postgres;
CREATE SEQUENCE public.tecnica_recoleccion_id_seq
    START WITH 6
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.tecnica_recoleccion_id_seq OWNER TO postgres;
ALTER SEQUENCE public.tecnica_recoleccion_id_seq OWNED BY public.tecnica_recoleccion.id;



CREATE TABLE public.investigacion (
    id integer NOT NULL,
    tema character varying NOT NULL,
    fecha_creacion timestamp(0) without time zone,
    disciplina character varying NOT NULL,
    fk_usuario integer
);
ALTER TABLE public.investigacion OWNER TO postgres;
CREATE SEQUENCE public.investigacion_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.investigacion_id_seq OWNER TO postgres;
ALTER SEQUENCE public.investigacion_id_seq OWNED BY public.investigacion.id;




CREATE TABLE public.item (
    id integer NOT NULL,
    numero integer NOT NULL,
    descripcion character varying NOT NULL,
    fk_indicio integer,
    fk_parametro integer,
    fk_instrumento integer
);
ALTER TABLE public.item OWNER TO postgres;
CREATE SEQUENCE public.item_id_seq
    START WITH 98
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.item_id_seq OWNER TO postgres;
ALTER SEQUENCE public.item_id_seq OWNED BY public.item.id;


CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
ALTER TABLE public.migrations OWNER TO postgres;
CREATE SEQUENCE public.migrations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.migrations_id_seq OWNER TO postgres;
ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;



CREATE TABLE public.justificacion_ui (
    id integer NOT NULL,
    fk_unidad_informacion integer,
    fk_justificacion integer
);
ALTER TABLE public.justificacion_ui OWNER TO postgres;
CREATE SEQUENCE public.justificacion_ui_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.justificacion_ui_id_seq OWNER TO postgres;
ALTER SEQUENCE public.justificacion_ui_id_seq OWNED BY public.justificacion_ui.id;



CREATE TABLE public.objetivo_general (
    id integer NOT NULL,
    objetivo character varying NOT NULL,
    proposito character varying,
    verbo_objetivo character varying NOT NULL,
    verbo_evento character varying,
    fk_pregunta integer
);
ALTER TABLE public.objetivo_general OWNER TO postgres;
CREATE SEQUENCE public.objetivo_general_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.objetivo_general_id_seq OWNER TO postgres;
ALTER SEQUENCE public.objetivo_general_id_seq OWNED BY public.objetivo_general.id;




CREATE TABLE public.objetivo_especifico (
    id integer NOT NULL,
    pregunta_secundaria character varying,
    objetivo character varying NOT NULL,
    estadio character varying NOT NULL,
    fk_objetivo_general integer
);
ALTER TABLE public.objetivo_especifico OWNER TO postgres;
CREATE SEQUENCE public.objetivo_especifico_id_seq
    START WITH 16
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.objetivo_especifico_id_seq OWNER TO postgres;
ALTER SEQUENCE public.objetivo_especifico_id_seq OWNED BY public.objetivo_especifico.id;




CREATE TABLE public.parametro (
    id integer NOT NULL,
    categoria character varying NOT NULL,
    descripcion character varying NOT NULL,
    nivel character varying NOT NULL
);
ALTER TABLE public.parametro OWNER TO postgres;
CREATE SEQUENCE public.parametro_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.parametro_id_seq OWNER TO postgres;
ALTER SEQUENCE public.parametro_id_seq OWNED BY public.parametro.id;




CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
ALTER TABLE public.password_resets OWNER TO postgres;




CREATE TABLE public.persona (
    cedula integer NOT NULL,
    nombre character varying NOT NULL,
    nombre_2 character varying,
    apellido character varying NOT NULL,
    apellido_2 character varying,
    fk_usuario integer,
    fk_institucion integer
);
ALTER TABLE public.persona OWNER TO postgres;




CREATE TABLE public.pregunta (
    id integer NOT NULL,
    pregunta character varying NOT NULL,
    fk_investigacion integer,
    fk_tipo_investigacion integer,
    fk_modalidad integer,
    fk_temporalidad integer
);
ALTER TABLE public.pregunta OWNER TO postgres;
CREATE SEQUENCE public.pregunta_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.pregunta_id_seq OWNER TO postgres;
ALTER SEQUENCE public.pregunta_id_seq OWNED BY public.pregunta.id;




CREATE TABLE public.privilegio (
    id integer NOT NULL,
    tipo character varying NOT NULL
);
ALTER TABLE public.privilegio OWNER TO postgres;
CREATE SEQUENCE public.privilegio_id_seq
    START WITH 2
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.privilegio_id_seq OWNER TO postgres;
ALTER SEQUENCE public.privilegio_id_seq OWNED BY public.privilegio.id;




CREATE TABLE public.rol (
    id integer NOT NULL,
    nombre character varying NOT NULL
);
ALTER TABLE public.rol OWNER TO postgres;
CREATE SEQUENCE public.rol_id_seq
    START WITH 6
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.rol_id_seq OWNER TO postgres;
ALTER SEQUENCE public.rol_id_seq OWNED BY public.rol.id;




CREATE TABLE public.rol_privilegio (
    id integer NOT NULL,
    fk_rol integer NOT NULL,
    fk_privilegio integer NOT NULL
);
ALTER TABLE public.rol_privilegio OWNER TO postgres;
CREATE SEQUENCE public.rol_privilegio_id_seq
    START WITH 2
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.rol_privilegio_id_seq OWNER TO postgres;
ALTER SEQUENCE public.rol_privilegio_id_seq OWNED BY public.rol_privilegio.id;




CREATE TABLE public.sinergia (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    fk_evento_ui integer
);
ALTER TABLE public.sinergia OWNER TO postgres;
CREATE SEQUENCE public.sinergia_id_seq
    START WITH 30
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.sinergia_id_seq OWNER TO postgres;
ALTER SEQUENCE public.sinergia_id_seq OWNED BY public.sinergia.id;




CREATE TABLE public.temporalidad (
    id integer NOT NULL,
    fecha_inicio date NOT NULL,
    fecha_fin date NOT NULL
);
ALTER TABLE public.temporalidad OWNER TO postgres;
CREATE SEQUENCE public.temporalidad_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.temporalidad_id_seq OWNER TO postgres;
ALTER SEQUENCE public.temporalidad_id_seq OWNED BY public.temporalidad.id;




CREATE TABLE public.tipo_investigacion (
    id integer NOT NULL,
    tipo character varying NOT NULL,
    holotipo character varying NOT NULL
);
ALTER TABLE public.tipo_investigacion OWNER TO postgres;
CREATE SEQUENCE public.tipo_investigacion_id_seq
    START WITH 11
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.tipo_investigacion_id_seq OWNER TO postgres;
ALTER SEQUENCE public.tipo_investigacion_id_seq OWNED BY public.tipo_investigacion.id;




CREATE TABLE public.unidad_estudio (
    id integer NOT NULL,
    nombre character varying NOT NULL
);
ALTER TABLE public.unidad_estudio OWNER TO postgres;
CREATE SEQUENCE public.unidad_estudio_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.unidad_estudio_id_seq OWNER TO postgres;
ALTER SEQUENCE public.unidad_estudio_id_seq OWNED BY public.unidad_estudio.id;



CREATE TABLE public.unidad_informacion (
    id integer NOT NULL,
    cita character varying NOT NULL,
    nivel character varying NOT NULL,
    fk_categoria integer,
    fk_pregunta integer
);
ALTER TABLE public.unidad_informacion OWNER TO postgres;
CREATE SEQUENCE public.unidad_informacion_id_seq
    START WITH 79
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.unidad_informacion_id_seq OWNER TO postgres;
ALTER SEQUENCE public.unidad_informacion_id_seq OWNED BY public.unidad_informacion.id;




CREATE TABLE public.usuario (
    id integer NOT NULL,
    username character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    fk_rol integer,
    image character varying DEFAULT 'user.png'::character varying NOT NULL
);
ALTER TABLE public.usuario OWNER TO postgres;
CREATE SEQUENCE public.usuario_id_seq
    START WITH 7
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.usuario_id_seq OWNER TO postgres;
ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;




CREATE TABLE public.modalidad (
    id integer NOT NULL,
    modalidad character varying
);
ALTER TABLE public.modalidad OWNER TO postgres;
CREATE SEQUENCE public.modalidad_id_seq
    START WITH 2
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.modalidad_id_seq OWNER TO postgres;
ALTER SEQUENCE public.modalidad_id_seq OWNED BY public.modalidad.id;




CREATE TABLE public.bibliografia (
    id integer NOT NULL,
    referencia character varying,
    link character varying, 
    tipo_fuente character varying,
    titulo character varying,
    autor character varying,
    ano integer
);
ALTER TABLE public.bibliografia OWNER TO postgres;
CREATE SEQUENCE public.bibliografia_id_seq
    START WITH 31
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.bibliografia_id_seq OWNER TO postgres;
ALTER SEQUENCE public.bibliografia_id_seq OWNED BY public.bibliografia.id;




CREATE TABLE public.bibliografia_usada (
    id integer NOT NULL,
    fk_bibliografia integer,
    fk_unidad_informacion integer
);
ALTER TABLE public.bibliografia_usada OWNER TO postgres;
CREATE SEQUENCE public.bibliografia_usada_id_seq
    START WITH 67
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.bibliografia_usada_id_seq OWNER TO postgres;
ALTER SEQUENCE public.bibliografia_usada_id_seq OWNED BY public.bibliografia_usada.id;




CREATE TABLE public.categoria (
    id integer NOT NULL,
    categoria character varying NOT NULL, 
    tipo_idea character varying,
    fk_categoria integer
);
ALTER TABLE public.categoria OWNER TO postgres;
CREATE SEQUENCE public.categoria_id_seq
    START WITH 78
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.categoria_id_seq OWNER TO postgres;
ALTER SEQUENCE public.categoria_id_seq OWNED BY public.categoria.id;




CREATE TABLE public.tecnica_analisis (
    id integer NOT NULL,
    tecnica character varying NOT NULL,
    descripcion character varying 
);
ALTER TABLE public.tecnica_analisis OWNER TO postgres;
CREATE SEQUENCE public.tecnica_analisis_id_seq
    START WITH 23
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.tecnica_analisis_id_seq OWNER TO postgres;
ALTER SEQUENCE public.tecnica_analisis_id_seq OWNED BY public.tecnica_analisis.id;




CREATE TABLE public.tecnica_analisis_aplicada (
    id integer NOT NULL,
    fk_criterio_metodologico integer,
    fk_tecnica_analisis integer 
);
ALTER TABLE public.tecnica_analisis_aplicada OWNER TO postgres;
CREATE SEQUENCE public.tecnica_analisis_aplicada_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.tecnica_analisis_aplicada_id_seq OWNER TO postgres;
ALTER SEQUENCE public.tecnica_analisis_aplicada_id_seq OWNED BY public.tecnica_analisis_aplicada.id;




CREATE TABLE public.unidad_estudio_ui (
    id integer NOT NULL,
    fk_unidad_estudio integer,
    fk_unidad_informacion integer
);
ALTER TABLE public.unidad_estudio_ui OWNER TO postgres;
CREATE SEQUENCE public.unidad_estudio_ui_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.unidad_estudio_ui_id_seq OWNER TO postgres;
ALTER SEQUENCE public.unidad_estudio_ui_id_seq OWNED BY public.unidad_estudio_ui.id;




CREATE TABLE public.contexto_ui (
    id integer NOT NULL,
    fk_contexto integer,
    fk_unidad_informacion integer
);
ALTER TABLE public.contexto_ui OWNER TO postgres;
CREATE SEQUENCE public.contexto_ui_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.contexto_ui_id_seq OWNER TO postgres;
ALTER SEQUENCE public.contexto_ui_id_seq OWNED BY public.contexto_ui.id;




CREATE TABLE public.categoria_calidad (
    id integer NOT NULL,
    nombre character varying NOT NULL
);
ALTER TABLE public.categoria_calidad OWNER TO postgres;
CREATE SEQUENCE public.categoria_calidad_id_seq
    START WITH 10
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.categoria_calidad_id_seq OWNER TO postgres;
ALTER SEQUENCE public.categoria_calidad_id_seq OWNED BY public.categoria_calidad.id;




CREATE TABLE public.calidad_pregunta (
    id integer NOT NULL,
    pregunta character varying,
    fk_categoria_calidad integer
);
ALTER TABLE public.calidad_pregunta OWNER TO postgres;
CREATE SEQUENCE public.calidad_pregunta_id_seq
    START WITH 17
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.calidad_pregunta_id_seq OWNER TO postgres;
ALTER SEQUENCE public.calidad_pregunta_id_seq OWNED BY public.calidad_pregunta.id;




CREATE TABLE public.calidad_item (
    id integer NOT NULL,
    respuesta boolean DEFAULT false,
    fk_calidad_pregunta integer,
    fk_investigacion integer
);
ALTER TABLE public.calidad_item OWNER TO postgres;
CREATE SEQUENCE public.calidad_item_id_seq
    START WITH 65
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.calidad_item_id_seq OWNER TO postgres;
ALTER SEQUENCE public.calidad_item_id_seq OWNED BY public.calidad_item.id;




CREATE TABLE public.justificacion (
    id integer NOT NULL,
    argumento character varying NOT NULL,
    tipo character varying NOT NULL,
    acerca_de character varying
);
ALTER TABLE public.justificacion OWNER TO postgres;
CREATE SEQUENCE public.justificacion_id_seq
    START WITH 30
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.justificacion_id_seq OWNER TO postgres;
ALTER SEQUENCE public.justificacion_id_seq OWNED BY public.justificacion.id;




CREATE TABLE public.poblacion (
    id integer NOT NULL,
    descripcion character varying,
    cantidad integer,
    fk_unidad_estudio_ui integer
);
ALTER TABLE public.poblacion OWNER TO postgres;
CREATE SEQUENCE public.poblacion_id_seq
    START WITH 5
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.poblacion_id_seq OWNER TO postgres;
ALTER SEQUENCE public.poblacion_id_seq OWNED BY public.poblacion.id;




CREATE TABLE public.muestra (
    id integer NOT NULL,
    descripcion character varying,
    cantidad integer,
    fk_poblacion integer
);
ALTER TABLE public.muestra OWNER TO postgres;
CREATE SEQUENCE public.muestra_id_seq
    START WITH 12
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.muestra_id_seq OWNER TO postgres;
ALTER SEQUENCE public.muestra_id_seq OWNED BY public.muestra.id;




CREATE TABLE public.tecnica_muestreo_aplicada (
    id integer NOT NULL,
    fk_muestra integer,
    fk_tecnica_muestreo integer
);
ALTER TABLE public.tecnica_muestreo_aplicada OWNER TO postgres;
CREATE SEQUENCE public.tecnica_muestreo_aplicada_id_seq
    START WITH 12
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.tecnica_muestreo_aplicada_id_seq OWNER TO postgres;
ALTER SEQUENCE public.tecnica_muestreo_aplicada_id_seq OWNED BY public.tecnica_muestreo_aplicada.id;




CREATE TABLE public.tecnica_muestreo (
    id integer NOT NULL,
    tecnica character varying
);
ALTER TABLE public.tecnica_muestreo OWNER TO postgres;
CREATE SEQUENCE public.tecnica_muestreo_id_seq
    START WITH 8
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.tecnica_muestreo_id_seq OWNER TO postgres;
ALTER SEQUENCE public.tecnica_muestreo_id_seq OWNED BY public.tecnica_muestreo.id;

/*CREATE END*/