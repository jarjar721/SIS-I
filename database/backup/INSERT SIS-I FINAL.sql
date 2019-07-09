
-- dimension
INSERT INTO public.dimension
(id, dimension)
VALUES
(1, 'Sumarial');
INSERT INTO public.dimension
(id, dimension)
VALUES
(2, 'Táctica');
INSERT INTO public.dimension
(id, dimension)
VALUES
(3, 'Analítica');
INSERT INTO public.dimension
(id, dimension)
VALUES
(4, 'Teórica');

-- fuente
INSERT INTO public.fuente
(id, tipo_fuente, tipo_diseno, ambiente)
VALUES
(1, 'Viva', 'Diseño de Campo', 'Natural');
INSERT INTO public.fuente
(id, tipo_fuente, tipo_diseno, ambiente)
VALUES
(2, 'No vivas', 'Diseño de Laboratorio', 'Artificial');

-- foco
INSERT INTO public.foco
(id, variedad, agrupacion)
VALUES
(1, 'Univariable', 'De rasgo');
INSERT INTO public.foco
(id, variedad, agrupacion)
VALUES
(2, 'Multivariable', 'De caso');

-- tecnica_recoleccion
INSERT INTO public.tecnica_recoleccion
(id, nombre)
VALUES
(1, 'Encuesta');
INSERT INTO public.tecnica_recoleccion
(id, nombre)
VALUES
(2, 'Entrevista');
INSERT INTO public.tecnica_recoleccion
(id, nombre)
VALUES
(3, 'Observación');
INSERT INTO public.tecnica_recoleccion
(id, nombre)
VALUES
(4, 'Sesiones en profundidad');
INSERT INTO public.tecnica_recoleccion
(id, nombre)
VALUES
(5, 'Revisión documental');

/* START instrumento */
INSERT INTO public.instrumento
(id, nombre, fk_tecnica_recoleccion)
VALUES
(1, 'Cuestionario', 2);
INSERT INTO public.instrumento
(id, nombre, fk_tecnica_recoleccion)
VALUES
(2, 'Guía de Observación', 3);
INSERT INTO public.instrumento
(id, nombre, fk_tecnica_recoleccion)
VALUES
(3, 'Checklist', 1);
INSERT INTO public.instrumento
(id, nombre, fk_tecnica_recoleccion)
VALUES
(4, 'Registro Anedótico', 5);
INSERT INTO public.instrumento
(id, nombre, fk_tecnica_recoleccion)
VALUES
(5, 'Lista de Cotejo', 3);
INSERT INTO public.instrumento
(id, nombre, fk_tecnica_recoleccion)
VALUES
(6, 'Escala de Estimación', 4);
/* END instrumento */

-- tipo_investigacion
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(1, 'Investigación Exploratoria', 'Explorar');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(2, 'Investigación Descriptiva', 'Describir');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(3, 'Investigación Analítica', 'Analizar');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(4, 'Investigación Comparativa', 'Comparar');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(5, 'Investigación Explicativa', 'Explica');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(6, 'Investigación Predictiva', 'Predecir');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(7, 'Investigación Proyectiva', 'Proponer');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(8, 'Investigación Interactiva', 'Modificar');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(9, 'Investigación Confirmatoria', 'Confirmar');
INSERT INTO public.tipo_investigacion
(id, tipo, holotipo)
VALUES
(10, 'Investigación Evaluativa', 'Evaluar');

/* START modalidad */
INSERT INTO public.modalidad
(id, modalidad)
VALUES
(1, 'DDP');
/* END modalidad */


/* START diseno */

/*historico*/
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(1, 'Histórico', 1, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(2, 'Histórico', 1, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(3, 'Histórico', 1, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(4, 'Histórico', 1, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(5, 'Histórico', 2, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(6, 'Histórico', 2, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(7, 'Histórico', 2, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(8, 'Histórico', 2, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(9, 'Histórico', 3, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(10, 'Histórico', 3, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(11, 'Histórico', 3, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(12, 'Histórico', 3, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(13, 'Histórico', 4, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(14, 'Histórico', 4, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(15, 'Histórico', 4, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(16, 'Histórico', 4, 2, 2);

/*Evolutivo*/
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(17, 'Evolutivo', 1, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(18, 'Evolutivo', 1, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(19, 'Evolutivo', 1, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(20, 'Evolutivo', 1, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(21, 'Evolutivo', 2, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(22, 'Evolutivo', 2, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(23, 'Evolutivo', 2, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(24, 'Evolutivo', 2, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(25, 'Evolutivo', 3, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(26, 'Evolutivo', 3, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(27, 'Evolutivo', 3, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(28, 'Evolutivo', 3, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(29, 'Evolutivo', 4, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(30, 'Evolutivo', 4, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(31, 'Evolutivo', 4, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(32, 'Evolutivo', 4, 2, 2);

/*contemporaneo*/
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(33, 'Contemporáneo', 1, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(34, 'Contemporáneo', 1, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(35, 'Contemporáneo', 1, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(36, 'Contemporáneo', 1, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(37, 'Contemporáneo', 2, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(38, 'Contemporáneo', 2, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(39, 'Contemporáneo', 2, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(40, 'Contemporáneo', 2, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(41, 'Contemporáneo', 3, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(42, 'Contemporáneo', 3, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(43, 'Contemporáneo', 3, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(44, 'Contemporáneo', 3, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(45, 'Contemporáneo', 4, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(46, 'Contemporáneo', 4, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(47, 'Contemporáneo', 4, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(48, 'Contemporáneo', 4, 2, 2);

/*transeccional*/
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(49, 'Transeccional', 1, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(50, 'Transeccional', 1, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(51, 'Transeccional', 1, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(52, 'Transeccional', 1, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(53, 'Transeccional', 2, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(54, 'Transeccional', 2, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(55, 'Transeccional', 2, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(56, 'Transeccional', 2, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(57, 'Transeccional', 3, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(58, 'Transeccional', 3, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(59, 'Transeccional', 3, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(60, 'Transeccional', 3, 2, 2);

INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(61, 'Transeccional', 4, 1, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(62, 'Transeccional', 4, 1, 2);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(63, 'Transeccional', 4, 2, 1);
INSERT INTO public.diseno
(id, temporalidad, fk_dimension, fk_fuente, fk_foco)
VALUES
(64, 'Transeccional', 4, 2, 2);

/* END diseno */

/*START tecnica_analisis*/
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(1, 'Categorización');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(2, 'Análisis Morfológico');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(3, 'Análisis por Composición');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(4, 'Recurrencia');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(5, 'Análisis por significados');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(6, 'Analogía');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(7, 'Análisis por Reacción');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(8, 'Árbol de Secuencias');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(9, 'Identificación de ciclos reforzadores y compensadores');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(10, 'Síntesis de Conceptos');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(11, 'Frecuencia de casos por categoría');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(12, 'Análisis cluster de variables');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(13, 'Correlación');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(14, 'Índice de Concordancia');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(15, 'Índice de Jaccard');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(16, 'U Mann Whitney');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(17, 'Análisis de Segmentación');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(18, 'Análisis Discriminante');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(19, 'Análisis Log Lineal');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(20, 'Análisis de Tendencia');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(21, 'Correlación Parcial');
INSERT INTO public.tecnica_analisis
(id, tecnica)
VALUES
(22, 'Regresión Múltiple');

/*END tecnica_analisis*/

/*START rol*/
INSERT INTO public.rol
(id, nombre)
VALUES
(1, 'Administrador');
INSERT INTO public.rol
(id, nombre)
VALUES
(2, 'Investigador');
INSERT INTO public.rol
(id, nombre)
VALUES
(3, 'Gerente');
INSERT INTO public.rol
(id, nombre)
VALUES
(4, 'Ente Gubernamental');
INSERT INTO public.rol
(id, nombre)
VALUES
(5, 'Tutor y Asesor');
/*END rol*/

--Privilegio
INSERT INTO public.privilegio
(id, tipo)
VALUES
(1, 'Control Roles');
--Rol-Pri
INSERT INTO public.rol_privilegio
(id, fk_rol, fk_privilegio)
VALUES
(1, 1, 1);

/* START institucion */
INSERT INTO public.institucion
(id, nombre)
VALUES
(3, 'Universidad Técnica de Ambato');
INSERT INTO public.institucion
(id, nombre)
VALUES
(4, 'Universidad Nacional Experimental Simón Rodríguez');
INSERT INTO public.institucion
(id, nombre)
VALUES
(5, 'Universidad Iberoamericana');
INSERT INTO public.institucion
(id, nombre)
VALUES
(6, 'Universidad de Carabobo');
/* END institucion */

/* START usuario */
INSERT INTO public.usuario
(id, username, email, password, email_verified_at, remember_token, created_at, updated_at, fk_rol, image)
VALUES
(3, 'iaramanzano', 'imanzano@mail.es', 'prueba', NULL, NULL, '2019-06-16 15:36:11', '2019-06-16 15:36:11', 2, 'user.png');
INSERT INTO public.usuario
(id, username, email, password, email_verified_at, remember_token, created_at, updated_at, fk_rol, image)
VALUES
(4, 'srocha', 'srocha@mail.com', 'prueba', NULL, NULL, '2019-06-16 15:36:11', '2019-06-16 15:36:11', 2, 'user.png');
INSERT INTO public.usuario
(id, username, email, password, email_verified_at, remember_token, created_at, updated_at, fk_rol, image)
VALUES
(5, 'CamaPedro', 'camacaro@mail.com', 'prueba', NULL, NULL, '2019-06-16 15:36:11', '2019-06-16 15:36:11', 2, 'user.png');
INSERT INTO public.usuario
(id, username, email, password, email_verified_at, remember_token, created_at, updated_at, fk_rol, image)
VALUES
(6, 'zaguilarte', 'zaguilarte@mail.com', 'prueba', NULL, NULL, '2019-06-16 15:36:11', '2019-06-16 15:36:11', 2, 'user.png');
INSERT INTO public.usuario 
(id, username, email, password, email_verified_at, remember_token, created_at, updated_at, fk_rol, image) 
VALUES 
(1, 'Adriadmin', 'a@a.com', '$2y$10$nWi7ptxrKLxpjCM0dJ9wOOzRzFOqOqXBYw1j/44noppkCT76Lilny', NULL, NULL, '2019-07-03 20:58:37', '2019-07-03 20:58:37', 1, 'user.png');
INSERT INTO public.usuario 
(id, username, email, password, email_verified_at, remember_token, created_at, updated_at, fk_rol, image) 
VALUES 
(2, 'jarjar721', 'jarjar721@sisi.com', '$2y$10$JT0NxhWX25TtsrwbWPdWKu.UqTJ8pfWWJzJQ0xblI3U0A.McEOtj2', NULL, NULL, '2019-07-03 20:58:37', '2019-07-03 20:58:37', 1, 'user.png');
/* END usuario */

/* START persona */
INSERT INTO public.persona
(fk_institucion, fk_usuario, nombre, apellido, cedula, nombre_2, apellido_2)
VALUES
(3, 3, 'Ibeth', 'Manzano', 0, 'Aracely', 'Gallardo');
INSERT INTO public.persona
(cedula, nombre, nombre_2, apellido, apellido_2, fk_usuario, fk_institucion)
VALUES
(1, 'Sonia', 'Yolanda', 'Rocha', 'Reza', 4, 5);
INSERT INTO public.persona
(fk_institucion, fk_usuario, nombre, apellido, cedula, nombre_2, apellido_2)
VALUES
(4, 5, 'Pedro', 'Camacaro', 2, 'Rafael', NULL);
INSERT INTO public.persona
(fk_institucion, fk_usuario, nombre, apellido, cedula, nombre_2, apellido_2)
VALUES
(6, 6, 'Zobeida', 'Aguilarte', 3, NULL, NULL);
/* END persona */

/* START investigacion */
INSERT INTO public.investigacion
(id, tema, fecha_creacion, disciplina, fk_usuario)
VALUES
(1, 'Los recursos WEB 2.0 y su incidencia en el proceso de enseñanza aprendizaje de las TICs en el 1er semestre de la Facultad de Ingeniería en Sistemas, Electrónica e Industrial de la Universidad Técnica de Ambato', '2019-06-16 15:36:11', 'Tecnológica', 3);
INSERT INTO public.investigacion
(id, tema, fecha_creacion, disciplina, fk_usuario)
VALUES
(2, 'Aproximación a la Calidad de Vida en el Trabajo en la Organización Castrense Venezolana. (Caso: Aviación Militar Venezolana)', '2019-06-16 15:36:11', 'Ciencias Administrativas', 5);
INSERT INTO public.investigacion
(id, tema, fecha_creacion, disciplina, fk_usuario)
VALUES
(3, 'Pobreza, Socialización y Movilidad Social', '2007-05-19 00:00:00', 'Psicología', 4);
INSERT INTO public.investigacion
(id, tema, fecha_creacion, disciplina, fk_usuario)
VALUES
(4, 'ESTRATEGIAS GERENCIALES DE EVALUACIÓN DE DESEMPEÑO QUE PROMUEVAN EL MEJORAMIENTO DEL TALENTO HUMANO QUE REALIZA FUNCIONES ADMINISTRATIVAS EN LA UNIVERSIDAD DE CARABOBO', '2007-05-19 00:00:00', 'Ciencias Económicas', 6);
/* END investigacion */

/* START pregunta */
INSERT INTO public.pregunta
(id, pregunta, fk_investigacion, fk_tipo_investigacion, fk_modalidad)
VALUES
(1, '¿Cómo incide los recursos web 2.0 en el proceso de enseñanza aprendizaje de las TICS, en el primer semestre de la Facultad de Ingeniería en Sistemas, Electrónica e Industrial de la Universidad Técnica de Ambato?', 1, 7, 1);
INSERT INTO public.pregunta
(id, pregunta, fk_investigacion, fk_tipo_investigacion, fk_modalidad)
VALUES
(2, '¿Cómo influye y afecta la organización castrense la Calidad de Vida en el Trabajo a la Aviación Militar Venezolana', 2, 7, 1);
INSERT INTO public.pregunta
(id, pregunta, fk_investigacion, fk_tipo_investigacion, fk_modalidad)
VALUES
(3, '¿Exitirán diferencias entre condiciones de vida de sujetos que se independizaron económicamente de familia origen o de haber contraído matrimonio y las actuales familias?', 3, 7, 1);
INSERT INTO public.pregunta
(id, pregunta, fk_investigacion, fk_tipo_investigacion, fk_modalidad)
VALUES
(4, '¿Cómo implementar estrategias gerenciales de evaluación de desempeño que promuevan el mejoramiento del talento humano que realiza funciones administrativas en la Universidad de Carabobo, Campus La Morita?', 4, 7, 1);
/* END pregunta */

/* START objetivo_general */
INSERT INTO public.objetivo_general
(id, objetivo, proposito, verbo_objetivo, verbo_evento, fk_pregunta)
VALUES
(1, 'Investigar la incidencia de los recursos web 2.0 en el proceso de enseñanza aprendizaje de las TIC’S, en el primer semestre de la Facultad de Ingeniería en Sistemas, Electrónica e Industrial de la Universidad Técnica de Ambato', NULL, 'Investigar', NULL, 1);
INSERT INTO public.objetivo_general
(id, objetivo, proposito, verbo_objetivo, verbo_evento, fk_pregunta)
VALUES
(2, 'Proponer un diseño conceptual del constructo de Calidad de Vida en el Trabajo en la Aviación Militar Venezolana considerando las sinergias: institucionales, económicas, sociales, psicológicas y políticas', NULL, 'Proponer', NULL, 2);
INSERT INTO public.objetivo_general
(id, objetivo, proposito, verbo_objetivo, verbo_evento, fk_pregunta)
VALUES
(3, 'Analizar la movilidad social ascendente y descendente de sujetos en pobreza extrema, pobreza moderada y no pobres', 'Detectar patrones de socialización', 'Analizar', 'Detectar', 3);
INSERT INTO public.objetivo_general
(id, objetivo, proposito, verbo_objetivo, verbo_evento, fk_pregunta)
VALUES
(4, 'Proponer Estrategias Gerenciales de evaluación de desempeño que promuevan el mejoramiento del Talento Humano que realiza funciones administrativas en la Facultad de Ciencias Económicas y Sociales de la Universidad de Carabobo Campus La Morita.', 'Promover el talento humano', 'Proponer', 'Promover', 4);

/* END objetivo_general */

/* START objetivo_especifico */
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(1, 'Determinar el índice del uso de los recursos Web 2.0 en el primer semestre de la FISEI', 'Confirmatorio', 1);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(2, 'Diagnosticar el nivel de aprendizaje de las TIC’S en los estudiantes del primer semestre de la FISEI', 'Descriptivo', 1);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(3, 'Proponer herramientas Web 2.0 como apoyo para la enseñanza aprendizaje de las TIC’S que se imparten en la FISEI', 'Proyectivo', 1);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(4, 'Describir los paradigmas o enfoques teóricos de la teoría general de la organización y el desarrollo de la gerencia desde la perspectiva del desarrollo humano.', 'Describir', 2);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(5, 'Analizar los diferentes enfoques teóricos conceptuales y los abordajes metodológicos, epistemológicos del proceso lógico de investigación de la Calidad de Vida en el Trabajo en la Aviación Militar Venezolana en el contexto nacional e internacional con la finalidad de determinar su campo de aplicación en la organización', 'Analizar', 2);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(6, 'Determinar los efectos de las sinergias: institucionales, económicas, sociales, psicológicas y políticas en la Calidad de Vida en el Trabajo en la Aviación Militar Venezolana.', 'Determinar', 2);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(7, 'Identificar las actitudes que subyacen en el personal militar profesional atendiendo a las diferentes sinergias de la Calidad de Vida en el Trabajo', 'Identificar', 2);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(8, 'Realizar un diagnóstico que permita detectar las sinergias que conformarán el diseño de Calidad de Vida en el Trabajo en la Aviación Militar Venezolana, así como también su aplicabilidad y confiabilidad', 'Realizar', 2);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(9, 'Formular un Diseño Conceptual de un Constructo de Calidad de Vida en el Trabajo en la Aviación Militar Venezolana mediante sus sinergias: institucionales, económicas, sociales, psicológicas y políticas que permitan adaptarse a los nuevos paradigmas y escenarios actuales', 'Formular', 2);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(10, 'Analizar las características de los agentes socializadores, así como 
las características de los modelos de identificación en estos mismos sujetos y comparar 
los patrones de socialización ligados a la identidad y a la identificación, 
complementando lo anterior mediante una comparación de aspectos psicológicos y 
sociales de los sujetos con movilidad ascendente respecto a los descendentes', 'Analítico', 3);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(11, 'Comparar patrones de socialización ligados a la identidad identificación de estos sujetos, describiendo tanto aquellos que sean semejantesal interior de los grupos de pobreza extrema, pobreza moderada y no pobres, como aquellos que sean diferentes, relacionándolos con la movilidad descendente y ascendente', 'Comparativo', 3);

INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(12, 'Diagnosticar la situación actual del desempeño del director y personal administrativo que cumple funciones en la Facultad de Ciencias Económicas y Sociales de la Universidad de Carabobo Campus La Morita, en relación al talento humano', 'Descriptivo', 4);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(13, 'Estimar los elementos que caracterizan el comportamiento organizacional del personal que realiza actividades administrativas dentro de la Facultad de Ciencias Económicas y Sociales', 'Analítico', 4);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(14, 'Identificar los métodos existentes en la evaluación de desempeño del personal que realiza actividades administrativas dentro de la Facultad de Ciencias Económicas y Sociales', 'Exploratorio', 4);
INSERT INTO public.objetivo_especifico
(id, objetivo, estadio, fk_objetivo_general)
VALUES
(15, 'Diseñar estrategias gerenciales de evaluación de desempeño que promuevan el mejoramiento del Talento Humano que realiza funciones administrativas en la Facultad de Ciencias Económicas y Sociales de la Universidad de Carabobo Campus La Morita.', 'Proyectivo', 4);

/* END objetivo_especifico */

/* START temporalidad */
INSERT INTO public.temporalidad
(id, fecha_inicio, fecha_fin)
VALUES
(1, '2010-01-01', '2010-06-01');
INSERT INTO public.temporalidad
(id, fecha_inicio, fecha_fin)
VALUES
(2, '2005-01-01', '2005-03-01');
INSERT INTO public.temporalidad
(id, fecha_inicio, fecha_fin)
VALUES
(3, '2007-07-10', '2008-07-01');
INSERT INTO public.temporalidad
(id, fecha_inicio, fecha_fin)
VALUES
(4, '2015-04-01', '2015-04-30');
/* END temporalidad */

/* START evento */
INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(1, 'Recursos WEB 2.0', 'Hecho');
INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(2, 'Enseñanza Aprendizaje de las TICs', 'Proceso');
INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(3, 'Calidad de Vida en el Trabajo', 'Situación');
INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(4, 'Cambios bruscos socioeconómica o familiarmente', 'Situación');
INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(5, 'Socialización y estandarización de las interacciones entre sujetos', 'Comportamiento');
INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(6, 'Tratamiento de los individuos con mismo estatus y como progresan económicamente', 'Comportamiento');

INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(7, 'Desempeño del director y personal administrativo', 'Comportamiento');
INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(8, 'Comportamiento organizacional del personal que realiza actividades administrativas', 'Comportamiento');
INSERT INTO public.evento
(id, nombre, tipo)
VALUES
(9, 'Métodos existentes en la evaluación de desempeño del personal que realiza actividades administrativas', 'Hecho');


/* END evento */

/* START parametro */
INSERT INTO public.parametro
(id, categoria, descripcion, nivel)
VALUES
(1, 'Intensidad', 'Conocimiento Sí o No', 'Sí o No');
INSERT INTO public.parametro
(id, categoria, descripcion, nivel)
VALUES
(2, 'Categorías', 'Conocimiento Sí o No', 'Distintas opciones');
INSERT INTO public.parametro
(id, categoria, descripcion, nivel)
VALUES
(3, 'Frecuencia', 'Cálculos de multivariables', 'Muy deficiente, deficiente, regular, bueno, excelente');
INSERT INTO public.parametro
(id, categoria, descripcion, nivel)
VALUES
(4, 'Categorías', 'Impacto de situación del sujeto en sus familiares', 'Distintas opciones');

/* END parametro */

/* START unidad_estudio */
INSERT INTO public.unidad_estudio
(id, nombre)
VALUES
(1, 'Estudiantes de 1er Semestre de la Facultad de Ingeniería en Sistemas, Electrónica e Industrial de la UTA');
INSERT INTO public.unidad_estudio
(id, nombre)
VALUES
(2, 'Personal militar de la Aviación Militar Venezolana');
INSERT INTO public.unidad_estudio
(id, nombre)
VALUES
(3, 'Sujetos pertenecientes a tres grupos económicos en Palomar');
INSERT INTO public.unidad_estudio
(id, nombre)
VALUES
(4, 'Personal administrativo del Campus La Morita');

/* END unidad_estudio */

/* START contexto */
INSERT INTO public.contexto
(id, contexto)
VALUES
(1, 'Facultad de Ingeniería en Sistemas, Electrónica e Industrial de la UTA');
INSERT INTO public.contexto
(id, contexto)
VALUES
(2, 'Aviación Militar Venezolana');
INSERT INTO public.contexto
(id, contexto)
VALUES
(3, 'Departamento de la Univerisdad Iberoamericana en Palomar');
INSERT INTO public.contexto
(id, contexto)
VALUES
(4, 'Universidad de Carabobo, Campus La Morita');

/* END contexto */

/* START tecnica_muestreo */
INSERT INTO public.tecnica_muestreo
(id, tecnica)
VALUES
(1, 'Azar Simple');
INSERT INTO public.tecnica_muestreo
(id, tecnica)
VALUES
(2, 'Azar Sistemático');
INSERT INTO public.tecnica_muestreo
(id, tecnica)
VALUES
(3, 'Muestreo Estratificádo');
INSERT INTO public.tecnica_muestreo
(id, tecnica)
VALUES
(4, 'Muestreo por Conglomerados');
INSERT INTO public.tecnica_muestreo
(id, tecnica)
VALUES
(5, 'Muestreo por Cuotas');
INSERT INTO public.tecnica_muestreo
(id, tecnica)
VALUES
(6, 'Muestreo Casual');
INSERT INTO public.tecnica_muestreo
(id, tecnica)
VALUES
(7, 'Muestreo Intencional');
/* END tecnica_muestreo */

/* START categoria */

--- Investigacion #1
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(1, 'Antecedentes', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(2, 'Fundamentación Filosóficas', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(3, 'Fundamentación Legales', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(4, 'Categorías Legales', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(5, 'Fundamentación Teórica', 'Idea de Fuerza', NULL);

INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(6, 'Ontología', 'Subcategoría', 2);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(7, 'Epistemológica', 'Subcategoría', 2);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(8, 'Psicopedagógica', 'Subcategoría', 2);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(9, 'Axiológica', 'Subcategoría', 2);

INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(10, 'Red de Inclusiones Conceptuales', 'Subcategoría', 4);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(11, 'Constelación de Ideas de la Variable Independiente', 'Subcategoría', 4);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(12, 'Constelación de Ideas de la Variable Dependiente', 'Subcategoría', 4);


INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(13, 'Redes Colaborativas', 'Subcategoría', 5);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(14, 'Internet', 'Subcategoría', 5);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(15, 'WEB 2.0', 'Subcategoría', 5);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(16, 'Enseñanza Aprendizaje de las TICs', 'Subcategoría', 5);


INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(17, 'Internet en la Educación', 'Subcategoría', 14);


INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(18, 'El Paso de la WEB 1.0 a la WEB 2.0', 'Subcategoría', 15);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(19, 'Ejemplos de la WEB 2.0', 'Subcategoría', 15);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(20, 'Adopción de la Web 2.0 en las Universidades', 'Subcategoría', 15);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(21, 'Integración de Contenidos y Aplicaciones Web', 'Subcategoría', 15);


INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(22, 'Integración de las TIC’s en Educación Superior', 'Subcategoría', 16);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(23, 'Didáctica de las TICs', 'Subcategoría', 16);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(24, 'Pedagogía y las TICs', 'Subcategoría', 16);


-- Investigación #2
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(25, 'Antecedentes', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(26, 'Bases Teóricas', 'Idea de Fuerza', NULL);


INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(27, 'Fundamentación Legal', 'Subcategoria', 25);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(28, 'Otras investigaciones', 'Subcategoria', 25);



INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(29, 'La Organización Castrense Venezolana', 'Subcategoria', 26);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(30, 'La Fuerza Armada Nacional (FAN)', 'Subcategoria', 26);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(31, 'La Aviación Militar Venezolana (AMV)', 'Subcategoria', 26);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(32, 'Bases Legales de la Organización Castrense Venezolana', 'Subcategoria', 26);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(33, 'Calidad de Vida en el Trabajo', 'Subcategoria', 26);



INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(34, 'Visión de la Fuerza Armada Nacional', 'Subcategoria', 30);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(35, 'Misión de la Fuerza Armada Nacional', 'Subcategoria', 30);



INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(36, 'Doctrina de la Aviación Militar Venezolana', 'Subcategoria', 31);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(37, 'Misión de la Aviación Militar Venezolana', 'Subcategoria', 31);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(38, 'Visión de la Aviación Militar Venezolana.', 'Subcategoria', 31);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(39, 'Organización de la Aviación Militar Venezolana', 'Subcategoria', 31);




INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(40, 'La Calidad', 'Subcategoria', 33);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(41, 'El Trabajo', 'Subcategoria', 33);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(42, 'Calidad de Vida en el Trabajo', 'Subcategoria', 33);



-- Investigación #3

INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(51, 'Socialización', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(43, 'Pobreza', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(44, 'Definición', 'Subcategoria', 43);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(45, 'Tipos', 'Subcategoria', 43);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(46, 'Índices', 'Subcategoria', 43);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(47, 'Indicadores y métodos de medición', 'Subcategoria', 43);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(48, 'Causas', 'Subcategoria', 43);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(49, 'Programas de Combate', 'Subcategoria', 43);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(50, 'Conceptualización', 'Subcategoria', 51);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(52, 'Valores y socialización', 'Subcategoria', 51);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(53, 'Expectativas y socialización', 'Subcategoria', 51);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(54, 'Educación y socialización', 'Subcategoria', 51);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(55, 'Atribuciones causales y socialización', 'Subcategoria', 51);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(56, 'Identidad', 'Subcategoria', 51);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(57, 'Identificación', 'Subcategoria', 51);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(58, 'Movilidad Social', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(59, 'Estratificación Social', 'Subcategoria', 58);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(60, 'Conceptualización y Tipos de Movilidad Social', 'Subcategoria', 58);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(61, 'Evaluación de la Movilidad Social', 'Subcategoria', 58);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(62, 'Factores que favorecen la Movilidad Social', 'Subcategoria', 58);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(63, 'Estratificación y Movilidad Social en América Latina', 'Subcategoria', 58);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(64, 'Socialización y Movilidad Social', 'Idea de Fuerza', NULL);



-- Investigación #4
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(65, 'Antecedentes de la Investigación', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(66, 'Antecedentes de la Universidad de Carabobo', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(67, 'Fundamentación Teóricas', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(68, 'Fundamentación Legal', 'Idea de Fuerza', NULL);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(69, 'Definición de Términos Básicos', 'Idea de Fuerza', NULL);

INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(70, 'Administración', 'Subcategoria', 67);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(71, 'Clima Organizacional', 'Subcategoria', 67);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(72, 'Gestión', 'Subcategoria', 67);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(73, 'Productividad', 'Subcategoria', 67);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(74, 'Talento Humano', 'Subcategoria', 67);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(75, 'Evaluación', 'Subcategoria', 67);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(76, 'Gerencia', 'Subcategoria', 67);
INSERT INTO public.categoria
(id, categoria, tipo_idea, fk_categoria)
VALUES
(77, 'Planificación', 'Subcategoria', 67);

/* END categoria */

/* START bibliografia */

-- Investigación #1
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(1, 'MEDINA Washington, Guía para el desarrollo de trabajos de graduación', NULL, 'Libro', 'Guía para el desarrollo de trabajos de graduación', 'Washington Medina', NULL);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(2, 'Diccionario de Informática OK, Edición 1999', NULL, 'Libro', 'Diccionario de Informática', 'OK', 1999);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(3, 'MEDINA Patricio, NTIC’s I, libro electrónico', NULL, 'Libro', 'NTIC’s I', 'Patricio Medina', NULL);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(4, 'COBO Cristobal y PARDO Hugo, Planeta Web 2.0 Inteligencia colectiva o medios fast food, Flacso Mexico, 2007.', NULL, 'Libro', 'Hugo Pardo', 'Planeta Web 2.0 Inteligencia colectiva o medios fast food', 2007);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(5, 'GONZÁLES Bahamonte Germán, Métodos Estadísticos y Principios de Diseño Experimental, Quito Ecuador, 1974', NULL, 'Libro', 'Métodos Estadísticos y Principios de Diseño Experimental', 'Germán Bahamonte Gonzáles', 1974);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(6, 'REVUELTA Francisco, Interactividad en los entornos e formación on line, Editorial UOC, Barcelona, 2009', NULL, 'Libro', 'Interactividad en los entornos e formación on line', 'Francisco Revuelta', 2009);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(7, NULL, 'http://www.ganaloquequieras.biz/temasinteres.php?ide=131', 'WEB', NULL, NULL, NULL);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(8, NULL, 'http://dinerointernet.obolog.com/web-2-0-redes-colaborativas-361373', 'WEB', NULL, NULL, NULL);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(9, 'Web 2.0 Conference, de octubre de 2004, San Francisco.', 'http://www.web2summit.com/web2con.', 'WEB', 'Web 2.0 Conference', NULL, 2004);


-- Investigación #2
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(10, 'ACKOFF, Rusell L. (1994): The Democratic Corporation. A Radical Prescription for Recreating Corporate America and Rediscovering Success, EUA.', NULL, 'Libro', 'The Democratic Corporation. A Radical Prescription for Recreating Corporate America and Rediscovering Success, EUA.', 'ACKOFF, Rusell L.', 1994);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(11, 'AGUADO, Ricardo. (1998): La Satisfacción Laboral, rjaguado@spin.com.mx. [Consulta: 16 de octubre de 2004].', 'rjaguado@spin.com.mx', 'Libro', 'La Satisfacción Laboral', 'AGUADO, Ricardo', 1998);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(12, 'AGUILAR, Luis Joyanes. (1998): Cibersociedad. (Los Retos Sociales ante un Nuevo Mundo Digital), Editorial McGraw-Hill, España.', NULL, 'Libro', 'Cibersociedad', 'AGUILAR, Luis Joyanes.', 1998);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(13, 'BLUM, Milton y James Naylor. (1982): Psicología Industrial (Sus Fundamentos Teóricos y Sociales), Editorial Trillas, México', NULL, 'Libro', 'Psicología Industrial (Sus Fundamentos Teóricos y Sociales)', 'BLUM, Milton y James Naylor.', 1982);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(14, 'CHIAVENATO, Adalberto. (2003): Gestión del Talento Humano, Editorial McGraw-Hill, Colombia', NULL, 'Libro', 'Gestión del Talento Humano', 'CHIAVENATO, Adalberto', 2003);

-- Investigación #3
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(15, 'Q, 3, 35- 38', NULL, 'Informe metodológico', 'Magnitud y Evolución de la Pobreza en México', 'CEPAL-INEGI', 1993);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(16, '73 (3), 375-408', NULL, 'Investigación de indicadores sociales', 'Poverty, Psychological Resourses and Subjetive Well-Being', 'Andrade, P.', 1998);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(17, 'Universidad Iberoamericana, Mexico, D.F.', NULL, 'Tesis de Licenciatura en Administracion', 'Politicas Pirblicas Neoliberales y Pobreza Extrema en Mexico', 'Azuela, M. ', 1998);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(18, 'Mexico: Instituto de Investigaciones Sociales de la Universidad Nacional Autonoma de Mexico', NULL, 'Investigación', 'Migracion, estructura ocupacional y movilidad social (el caso Monterrey)', 'Balan, J., Browning, H., Jelin, E.', 1973);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(19, '. Mexico: El Colegio Mexiquense, A.C. ', NULL, 'Texto', 'Ideas, Valores y Tradiciones', 'Bazant, M. ', 1996);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(20, '145, 5, 122-146', NULL, 'Journal of Social Studies', 'Diversity of deaf identities', 'Bat-Chava, Y. ', 2000);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(21, 'México: INEGI, E1 Colegio de México y UNAM.', NULL, 'Texto', 'Pobreza y Estratiﬁcacion Social en México', 'Boltvinik, J. ', 2003);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(22, 'Méxic0.35. 101- 136. 271. ', NULL, 'Texto', 'Derechos Humanos y Medicion Oﬁcial de la Pobreza en México', 'Bolvinik, J. ', 1993);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(23, 'Q, 3, 35- 38', NULL, 'Trabajo y ocupaciones', 'The Sociology of Work in Latin America', 'Abramo, L.', 1998);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(24, 'México: Colofon', NULL, 'Texto', 'Educacion y Sociologia', 'Durkheim, E. ', 1966);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(25, '53 3 289-314', NULL, 'Social Indicators Research ', 'Ec0nomic Theory and Subjetive Well-being: Mexico', 'Fuentes, N. y Rojas, M. ', 2001);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(26, 'Mexico: Amorrortu Editores.', NULL, 'Texto', 'Siete Conceptos Cruciales en Psicoanlalisis', 'Nasio, J. ', 1990);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(27, 'Sociology of Education,72, 252-310. ', NULL, 'Investigación', 'Race, class, and gender in America: Narratives of opportunity among low-income African American youths', 'O’Connor, C.', 1999);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(28, 'Mexico: Conexion Graﬁca', NULL, 'En Los Rostros de la Pobreza', 'La Pobreza y el Bienestar Subjetivo', 'Palomar, J.', 1998);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(29, 'Departamento de Psicologia de la Universidad Iberoamericana. Mexico, D.F.', NULL, 'Proyecto de Investigacion', 'Pobreza, Recursos Psicosociales y Bienestar Subjetivo', 'Palomar, J. ', 1999);
INSERT INTO public.bibliografia
(id, referencia, link, tipo_fuente, titulo, autor, ano)
VALUES
(30, 'México: Plaza Valdés, Universidad de las Américas, Centro de Estudios Sobre Calidad de Vida y Desarrollo Social e lntemacional Society for Quality of Life Studies (ISQOLS).', NULL, 'Estudio', 'Estructura del Bienestar Subjetivo: Construccion de una Escala Multidimensional en Calidad de Vida y Bienestar Subjetivo en Mexico', 'Palomar, J. ', 2005);


-- Investigación #4
/* No tiene bibliografía. Es una mala investigación */


/* END bibliografia */

/* START justificacion */

-- Investigación #1
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(1, 'La necesidad de dar origen a un nuevo mecanismo de apoyo para las clases impartidas en el aula justifican plenamente la creación de este wiki en el que el alumno tendrá a disposición toda la información del módulo de NTIC’S I, enlaces de información clasificada de acuerdo a los temas, apoyo de guías audiovisuales, animaciones, presentaciones en diapositivas, los mismos que muchas veces por el factor tiempo no pueden ser analizados o revisados con el debido detenimiento dentro del aula de clases.',
'Necesidad', 'Evento');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(2, 'Es importante estar a la vanguardia tecnológica en la utilización de recursos didácticos que se basen en la red global o internet, si bien es cierto, en la actualidad un elevado índice de los alumnos que ingresan a la universidad tienen un aceptable conocimiento sobre el manejo de un computador y programas informáticos, pero no saben cómo utilizar o no se les motiva a utilizar este tipo de recursos en su proceso cognitivo ya que solamente lo usan para el entretenimiento. Efectivamente es necesario un entrenamiento técnico en los mismos, para promover el buen uso de las nuevas herramientas, de las nuevas tendencias y así aprovechar el ímpetu colaborativo que se genera en los alumnos y no sólo verlos como receptores pasivos de información con breves destellos de participación. La interacción permite crear una forma de comunicación bidireccional entre el educador y el estudiante.',
'Motivación', 'Evento');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(3, 'La realización del proyecto desde el punto de vista tecnológico es factible por cuanto la Facultad de Ingeniería en Sistemas, Electrónica e Industrial de la Universidad Técnica de Ambato posee los recursos tecnológicos suficientes para la utilización y aplicación de herramientas Web 2.0 que permitan potencializar el proceso de enseñanza aprendizaje.',
'Potencialidad', 'Evento');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(4, 'La utilización de recursos Web 2.0 en el proceso de enseñanza aprendizaje es un aspecto de gran importancia que los docentes debemos tomar en cuenta, ya que generan un importante espacio de aprovechamiento y de interés en la creación de su propio conocimiento. Estos recursos constituyen en gran medida un incentivo en el proceso colaborativo para el progreso y transformación de la educación. Se puede decir que el uso de estos recursos abiertos se convierten en espacios de interacción directos y libres que permiten a los alumnos tener mejores soportes y condiciones para el desarrollo de los procesos académicos. Además permiten la construcción de redes colaborativas, que generan Inteligencias Colectivas en pro de un mejor desarrollo y de una mejor educación.',
'Tendencia', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(5, 'Teniendo en cuenta la importancia de esta investigación se ha determinado que el presente proyecto de investigación, es factible en su realización ya que se cuenta con la entera y decidida participación tanto de los estudiantes como de los docentes que imparten la cátedra de NTIC’S I en la Facultad de Ingeniería en Sistemas, Electrónica e Industrial. Además se cuenta con los suficientes y necesarios recursos bibliográficos, de tiempo y económicos, que permitirán el desarrollo óptimo y culminación de la investigación.',
'Tendencia', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(6, 'Cabe señalar que los directos beneficiarios de esta investigación serán los estudiantes del primer semestre de la Facultad de Ingeniería en Sistemas, Electrónica e Industrial de la Universidad Técnica de Ambato. La utilidad de la presente investigación se la define en dos aspectos importantes que están determinados tanto en la parte teórica como en la parte práctica.',
'Interes', 'Unidad de Estudio');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(7, 'La utilidad teórica de esta investigación consiste en que se fundamentará en el tema de la Web 2.0, que es una tecnología novedosa que da un énfasis especial al intercambio abierto de conocimiento, se puede decir que es una evolución de la red que se define mejor con sus características o principios que son la posibilidad de compartir recursos, información, conocimiento, orientadas al usuario, al trabajo colaborativo, a crear redes sociales, a la intercreatividad, inteligencia colectiva, arquitectura de participación, multitudes inteligentes, etc.',
'Tendencia', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(8, 'La Web 2.0 se popularizó a partir de sus aplicaciones más representativas, como son: Wikipedia, YouTube, Flickr, WordPress, Blogger, MySpace, Facebook, OhMyNews, y cientos de recursos que intentan captar a usuarios que sean generadores de contenidos. En esta nueva Web la red digital deja de ser una simple vidriera de contenidos multimedia para convertirse en una plataforma abierta, construida sobre una arquitectura basada en la participación de los usuarios.',
'Necesidad', 'Evento');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(9, 'La utilidad práctica de la investigación radica en que se plantea una alternativa que contribuya a la utilización de los recursos Web 2.0, hacia fortalecer, mejorar, y si es el caso a perfeccionar el proceso de enseñanza aprendizaje, permitiendo al alumno la obtención de aprendizajes significativos. La utilización de estos recursos son una de las estrategias para lograr estimular el aprendizaje activo en los estudiantes, esto es, involucrarlos responsablemente en procesos en los que ellos participen, propongan, comprendan, reflexionen, construyan con nuevos productos y aprendan, es utilizar la metodología orientada al constructivismo, que puede definirse como un modelo de instrucción en el que los estudiantes pueden participar con sus propios criterios, generando su propio conocimiento en el contexto de sus propias experiencias y puedan aplicarlos en el mundo real, fuera del aula de clase.',
'Intereses', 'Evento');


-- Investigación #2
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(10, 'A partir del establecimiento de la unipolaridad se vienen presentando situaciones, paradigmas y nuevos escenarios produciendo una expansión e influencias de la institución castrense en la vida social tanto a las pertenecientes a si misma como al resto de la sociedad',
'Tendencia', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(11, 'Sigue siendo muy importante analizar la significación real de la institución armada en el momento actual y vislumbrar el significado de la decisión de carácter estratégico compatible con los intereses sustanciales de la Nación y finalmente dentro de este contexto establecer la necesidad de los programas de Calidad de Vida en el Trabajo en la relación organización-individuo-trabajo, de manera tal que se pueda mantener una correspondencia global en el desarrollo eficiente de la Aviación Militar Venezolana',
'Motivación', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(12, 'Desde la perspectiva de las distintas teorías y enfoques de la problemática de la Calidad de Vida en el Trabajo, constituye un importante campo de investigación y análisis. Se trata de una referencia que nos permitirá la comprensividad y explicación de aproximaciones teórico – empíricas de factores ambientales, organizacionales y humanos, relacionados con el mejoramiento y/o deterioro de la calidad de vida laboral de grupos de trabajadores empleados en distintos establecimientos industriales, empresas prestadoras de servicios de organismos públicos y privados. (Martínez y Camacaro, 1999:7).',
'Intereses', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(13, 'El estudio de estos aspectos proporciona retroinformación acerca de los procesos que determinan los comportamientos organizacionales, permitiendo además, introducir cambios planificados tanto en las actitudes y conductas de los miembros, como en la estructura organizacional o en uno o más de los subsistemas que la componen.',
'Intereses', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(14, 'Caracterizar los conceptos de gerencia, Organización Castrense y Calidad de Vida en el Trabajo, constructo de Calidad de Vida en el Trabajo que han consistido en que la atención al trabajador, desde la perspectiva de sus intereses, estímulos, motivaciones, concebidas para incrementar la productividad, llegaron a considerarse muchos más importantes, que las condiciones económicas y de mejoramiento físico,',
'Intereses', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(15, 'Los desafíos están centrados en la comprensión de las orientaciones de la necesidad de elaborar y planificar la Calidad de Vida en el Trabajo exige conocimientos sólidos, amplios y aparecen así administradores, economistas, etc. y para ejecutarlas surge históricamente, en la división socio-técnica del trabajo, el militar, entre otros profesionales.',
'Tendencia', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(16, 'La Aviación Militar Venezolana de acuerdo a lo estipulado en la Constitución vigente se presenta el planteamiento de una organización totalmente diferente que da origen a una serie de nuevos paradigmas que necesariamente tendrán que ser muy bien estudiados por la organización a fin de lograr una mejor asimilación de los cambios que tenemos en presentes y lograr un desarrollo eficiente, especialmente en lo que se refiere al entorno social de la mencionada organización.',
'Necesidad', 'Contexto');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(17, 'El estudio de la Calidad de Vida en el Trabajo en la Aviación Militar Venezolana es de gran importancia debido a que ello afecta directamente a la mencionada organización y al desempeño del personal que lo conforman. Éste estudio nos permitió establecer las condiciones en el medio ambiente laboral y sus efectos en la satisfacción laboral del personal militar de dicha institución.',
'Tendencia', 'Evento');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(18, 'Por medio de la implementación del Diseño Conceptual del Constructo de Calidad de Vida en el Trabajo permitirá conocer los efectos que producen las políticas y disposiciones generales de la organización del personal. Así se podrán mantener, suprimir, corregir o reforzar las políticas de la organización, según sean los resultados que ellos están obteniendo.',
'Necesidad', 'Unidad de Estudio');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(19, 'El presente trabajo es un planteamiento vanguardista e innovador en cuanto a toma de decisión y planeación estratégico gubernamental se refiere, ya que propone la utilización metodológica de un Diseño Conceptual del constructo de Calidad de Vida en el Trabajo que fortalecerá los procesos en el ámbito de la organización castrense específicamente en la Aviación Militar Venezolana tendiendo a una gestión pública más técnica y menos demagógica, una gestión más participativa, en sí más legítima',
'Intereses', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(20, 'Beneficios científicos: el presente estudio plantea el desarrollo de un constructo para lograr posteriormente, mediante su integración en dicho marco general, una concepción más amplia de la repercusión que está teniendo la Calidad de Vida en el Trabajo sobre los sinergias: institucionales, económicos, sociales, psicológicos y políticos en la Aviación Militar Venezolana',
'Intereses', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(21, 'Beneficios técnicos: el principal beneficio técnico que se pretende obtener es la adaptación/validación de un instrumento dirigiéndolo hacia la población de la Aviación Militar Venezolana que permita el desarrollo de estrategias de implantación y auditoria de la Calidad de Vida en el Trabajo en dicha organización',
'Intereses', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(22, 'Beneficios de interés y utilidad social: cabe señalar la importancia que tiene, dentro de la Aviación Militar Venezolana, el estudio de la Calidad de Vida en el Trabajo que permite detectar las repercusiones que puede tener para su desarrollo y posteriores transiciones del rol laboral.',
'Necesidad', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(23, 'Beneficios macro-organizacionales: la progresiva incorporación de variables moduladoras que permitan el diseño conceptual del Constructo de la Calidad de Vida en el Trabajo en la Aviación Militar Venezolana, que podrán ser extensible al resto de la Organización Castrense Venezolana considerando las sinergias: institucionales, económicos, sociales, psicológicos y políticos. Así como también, estudiar bajo qué factores las mismas producen un mayor o menor satisfacción laboral',
'Intereses', NULL);
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(24, 'Por lo tanto, la Calidad de Vida en el Trabajo es una forma diferente de vida dentro de la organización, que busca el desarrollo del trabajador, así como su eficiencia organizacional. Son beneficios para ambos, estos beneficios permitirán a la organización orientar sus fuerzas y recursos que antes utilizaban al enfrentar problemas de los trabajadores, hacia actividades de mayor importancia para el logro de sus objetivos',
'Motivación', 'Evento');


-- Investigación #3
/* No tiene justificaciones porque es una mala investigación */



-- Investigación #4
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(25, 'La fortaleza del proyecto de investigación se concretó en las actividades promovidas para conocer y transformar la realidad gerencial aplicando estrategias y herramientas orientadoras que ayudarán al personal directivo de la Facultad de Ciencias Económicas y Sociales en la evaluación de su desempeño',
'Motivación', 'Contexto');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(26, 'Dentro de este marco, en la actualidad se han desarrollado una serie de planes de acción que van encaminados a solventar algunas problemáticas que las organizaciones han venido arrastrando en materia de la gerencia de recursos humanos, en tal sentido con la realización del presente estudio, el cual consistirá en estrategias gerenciales de evaluación de desempeño que promuevan el mejoramiento del talento humano que realiza funciones administrativas en la Universidad de Carabobo, se consideró importante a causa de que el sector de recursos humanos, a medida que pasa el tiempo se les presentan gran cantidad de necesidades que son cada vez más elevadas, producto de una realidad cambiante; mediante la ejecución de diversos procesos vitales operativos claves y el cumplimiento de una o varias funciones cuyos resultados determinaron el éxito o fracaso de sus más importantes objetivos, como ventaja competitiva de acuerdo a los parámetros del buen funcionamiento organizacional.',
'Necesidad', 'Evento');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(27, 'Cabe considerar, por otra parte, que la presente investigación benefició a los directores y personal administrativo de la institución universitaria, ya que representó un aporte a la necesidad imperiosa de cambios y avances que exigen la institución pública con una capacidad de ajuste e innovación permanente de forma honesta y correcta, brindando una imagen diferente al servicio que prestan las mismas, a través de procesos formalizados y documentados que evaluados con indicadores permitan el cumplimiento de su misión y así obtener grandes beneficios.',
'Intereses', 'Unidad de Estudio');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(28, 'En esta perspectiva, esta investigación, sirvió de utilidad ya que una buena evaluación de desempeño contribuyó al desarrollo efectivo organizacional, permitiendo con ello esquematizar cada factor que influya positivamente para que la organización pueda optimizar sus funciones y procesos. Lo que se quiere afirmar con esto, es que la investigación busca apoyar al talento humano de las instituciones educativas, con un instrumento de gestión de proceso útil y aplicable a la realidad.',
'Intereses', 'Evento');
INSERT INTO public.justificacion
(id, argumento, tipo, acerca_de)
VALUES
(29, 'Desde el punto de vista académico, la presente investigación sirvió de antecedente para futuras investigaciones similares relacionadas con gestión del talento humano, así mismo ayudó a ampliar conocimientos teóricos actualizados y a sincerar el correcto funcionamiento de la comunicación interna, ya que el mismo expondrá las debilidades existentes. Debe señalarse que la investigación está esbozada en las diferentes leyes que regula el ámbito de la Gerencia de los Recursos Humanos en la Administración Pública, es decir, el marco legal que regula al talento humano.',
'Intereses', 'Evento');

/* END justificacion */



/* START unidad_informacion */

-- Investigación #1
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(1, 'La investigación ha revelado que los estudiantes en su mayoría no utilizan la gran variedad de recursos que la Web 2.0 nos brinda, viéndose afectado su proceso cognitivo y de aprendizaje por lo tradicional, lo memorístico y lo rutinario posiblemente porque en los estudiantes no se fomenta una educación activa y participativa, sino repetitiva, es decir se incentiva a que el alumno obtenga un conocimiento a ciegas, lo cual va en retroceso del proceso que debiese ser cien por ciento cambiante, para lograr un alto nivel académico.', 'Monográfico',
1, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(2, 'Al no utilizar recursos informáticos en el proceso de enseñanza aprendizaje las tendencias pedagógicas se perpetuán en lo tradicional dificultando las innovaciones de distinta índole y la apertura a nuevas alternativas, como la de presentar al alumno información atractiva y significativa y no un conjunto de conocimientos acumulados por varias generaciones y que se los presenta como verdades acabadas que generalmente son contenidos disociados a la experiencia y a las realidades sociales. El reto es por tanto que el sistema educativo siga avanzando en la búsqueda de modelos pedagógicos eficaces y eficientes, que lleven hacia una educación que no sea pasiva, unidireccional e impositiva.', 'Monográfico',
1, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(3, 'La interacción educativa refuerza las enormes potencialidades comunicativas que ofrecen estos entornos en cuanto a la socialización fomentando la desjerarquización en las relaciones humanas y la distribución, intercambio y circulación de información, ideas y conocimientos. Así también la retroalimentación por parte de todos los involucrados en el proceso, incluido el estudiante, enriquece su valor y permite cualquier futuro uso para construir en base a fortalezas y notar las debilidades percibidas.', 'Monográfico',
1, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(4, 'La presente investigación se enfoca en el paradigma Crítico Propositivo, ya que se visualiza una estrecha relación entre el sujeto y objeto de estudio es decir el aspecto humano de los docentes, que está íntimamente relacionado con su realidad social en la educación.', 'Monográfico',
2, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(5, 'Considerando que el mundo experimenta profundos cambios que afectan e influyen el quehacer educativo, el presente trabajo se preocupa por la relación entre los recursos tecnológicos y humanos.', 'Monográfico',
6, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(6, 'Consciente de que nos desenvolvemos dentro de una realidad social cambiante y dinámica, el presente proyecto propone nuevas formas de interacción, creando nuevos entornos en donde los protagonistas, como agentes activos en la construcción de la realidad, crearan y compartirán información generando conocimiento colectivo.', 'Monográfico',
7, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(7, 'La investigación se enmarca en la teoría de socio cultural de Lew Vigotsky porque la utilización de la Web 2.0 se aprovecha de mejor manera en un ambiente social de inter - aprendizaje en donde se comparte el docente con el estudiante y los conocimientos.', 'Monográfico',
8, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(8, 'La investigación busca cultivar y resaltar, tanto en docentes como en alumnos, valores de responsabilidad, honestidad, equidad, justicia, respeto y amor a sus semejantes, y que los mismos sean participes directos en la práctica de estos valores.', 'Monográfico',
9, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(9, 'La Universidad Técnica de Ambato, se crea mediante Ley No. 69-05 del 18 de Abril de 1969, como una comunidad de profesores, estudiantes y trabajadores. La Universidad Técnica de Ambato se encuentra en la ciudad de Ambato capital de la provincia de Tungurahua, país Ecuador. Es la universidad más importante de la región central del país, cuenta con 9 facultades y 44 carreras en modalidad presencial y semipresencial.', 'Monográfico',
3, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(10, 'Sus 16.000 alumnos estudian a través de la metodología de currículo por competencias y cuentan con servicios médico y odontológico, transporte, seguro estudiantil, becas y comedor universitario', 'Monográfico',
3, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(11, 'La misión de la Universidad Técnica de Ambato es satisfacer las demandas científico – tecnológicas de la sociedad ecuatoriana en interacción dinámica con sus actores, formar profesionales líderes con pensamiento crítico reflexivo, creativo con conciencia social que contribuya al desarrollo científico, técnico, cultural y axiológico del país; desarrollar la investigación científica y tecnológica como un aporte en la solución de los problemas; producir bienes y prestar servicios para contribuir al mejoramiento de la calidad de vida de los ecuatorianos e impulsar el desarrollo sustentable del país.', 'Monográfico',
3, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(12, 'La Universidad Técnica de Ambato por sus niveles de excelencia se constituirá en un centro de referencia académico científico y humanístico del país. Ser la institución que promueva la generación de proyectos y propuestas como soporte para el desarrollo provincial, regional y nacional. En su entorno y tomando en cuenta las manifestaciones del pensamiento del mismo creará conocimiento, formará profesionales competentes, realizará investigaciones científica y tecnológica, difundirá el arte y la cultura, promoverá el deporte y prestará servicios, proponiendo alternativas de solución a los problemas de diversos sectores productivos y sociales. Estas acciones se realizarán en un ámbito de libertad, respeto a los derechos humanos e intelectuales, participación integral equidad de género y defensa del medio ambiente, con criterio de sustentabilidad y sostenibilidad.', 'Monográfico',
3, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(13, 'La Facultad de Ingeniería en Sistemas creada el 4 de Agosto de 1992, tiene como misión formar humanística, científica y profesionalmente, líderes en el campo informático teórico – práctico.', 'Monográfico',
3, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(14, 'Las Redes colaborativas son sitios que nacen a raíz del pensamiento de grupos, de ideas innovadoras, los mismos que intervienen dentro de las colectividades humanas para el desarrollo de procesos; estos procesos se enmarcan dentro del desarrollo de diferentes actividades, una de ellas es la educación. Las redes colaborativas pueden ayudar a mejorar la eficiencia y efectividad del trabajo académico y científico. Ofrecen servicios de chat, correo electrónico, anuncios, biblioteca digital, etc. Estas redes usan páginas que cuentan con aportes de inteligencia colectiva y son capaces de sindicar contenidos con los datos proporcionados por los usuarios. De tal manera que el lector o visitante de un sitio dejo de ser pasivo y se convirtió en un ente participativo, que crea, publica y edita contenidos multimedia. Las redes sociales colaborativas permiten una interacción entre los agentes participantes (estudiantes, docentes o tutores) de una forma más fluida y participativa, estos escenarios permiten subir y compartir herramientas de trabajo; con contenidos acerca de temáticas específicas, que han logrado entrar en el espacio educativo como soporte y ayuda colaborativa. Estas herramientas, brindan los escenarios propicios para obtener aprendizajes significativos y una educación mejor.', 'Monográfico',
13, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(15, 'Al Internet se lo conoce comúnmente como la "red de redes" es decir una red que no sólo interconecta computadoras, sino que interconecta redes de computadoras entre sí. Podría decirse también que es un conjunto descentralizado de redes de comunicación interconectadas, que garantizan que las redes físicas que la componen funcionen como una red lógica única de alcance mundial. Se originó en 1969, cuando se estableció la primera conexión de computadoras, conocida como ARPANET, entre tres universidades en California y una en Utah, Estados Unidos. Uno de los servicios que más éxito ha tenido en Internet ha sido la World Wide Web (WWW, o "la Web"), hasta tal punto que es habitual la confusión entre ambos términos. La WWW es un conjunto de protocolos que permite, de forma sencilla acceder a páginas del internet, facilitando la consulta remota de archivos de hipertexto.', 'Monográfico',
14, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(16, 'El Internet, se ha convertido en un medio idóneo para impartir una enseñanza de calidad y el progreso de las instituciones educativas en donde se destaca la elaboración de proyectos de actualización para llevar mayor cantidad de aprendizaje. Por otra parte, la educación es un proceso de promover conocimientos, este es un proceso bidireccional mediante el cual se transmite conocimientos, valores, costumbres y formas de actuar. A través del uso del Internet se posibilita, por primera vez en la historia de la educación que la mente quede liberada de tener que retener una cantidad enorme de información. Sólo es necesario comprender los conceptos sobre la dinámica de los procesos en las cuales una información está encuadrada, ello permite utilizar métodos pedagógicos con los cuales el alumno puede aprender más y mejor en un año lo que requería tres. Ahora los docentes pueden destinar su esfuerzo y el de los alumnos en desarrollar más las capacidades mentales que les posibiliten a los estudiantes poder comprender adecuadamente la información y elaboración creativamente pudiendo así producir una calidad superior de razonamiento. En la actualidad evaluaciones sobre la calidad educativa de los alumnos que egresan de la universidad han demostrado que la mayoría no comprenden bien lo que leen y tienen serias deficiencias en poder razonar eficientemente. Por eso deben tener bien en cuenta la forma como Internet puede mejorar la calidad del educando ya que este se puede en algunos casos revertir en su contra ya que por lo fácil que es acceder a esta fabulosa herramienta los estudiantes no se detienen a analizar ni a interpretar lo que allí se les trata de enseñar. Es de suma importancia que las personas que no estén capacitadas para elaborar con eficiencia, creativamente, la cuantiosa y variada información que pueden obtener en Internet, no podrán utilizar en forma optima este extraordinario instrumento, verán empobrecido el proceso de convertir la información en conocimiento, en su desempeño laboral a nivel de ignorancia que ello produce permite hablar de un tipo de analfabeto que será cada vez más rechazado en los ámbitos laborales. Respecto de la enseñanza formal, Internet puede ser útil como apoyo a la enseñanza y complemento a ella.', 'Monográfico',
17, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(17, 'La Web 2.0 es la transición que se ha dado de aplicaciones tradicionales hacia aplicaciones que funcionan a través de la web enfocada al usuario final. Se trata de aplicaciones que generen colaboración y de servicios que reemplacen las aplicaciones de escritorio. Es una etapa que ha definido nuevos proyectos en Internet y está preocupándose por brindar mejores soluciones para el usuario final. Muchos aseguran que se ha reinventado lo que era el Internet, pero la realidad es que se trata de una evolución natural del medio que propone cosas más interesantes diariamente. Y es que cuando la web inició, nos encontrábamos en un entorno estático, con páginas en HTML que sufrían pocas actualizaciones y no tenían interacción con el usuario. La Web 2.0 ofrece nuevas oportunidades para la generación y distribución del conocimiento. Para el análisis de este fenómeno tecno-social se integran algunos pensamientos de diversos autores que han estudiado el principio de la colectivización del saber y la gestión del conocimiento. Tomando en cuenta estas ideas, resultaba evidente que una apertura al libre flujo de la información e intercambio del conocimiento alcanzaría cada vez mayor protagonismo en la era contemporánea. Como es de suponerse, no en todos los sectores de la sociedad moderna existiría igual permeabilidad frente a la idea de la importancia de promover el libre intercambio del conocimiento. La web 2.0 podría ser definida desde un punto de vista tecnológico como un sistema de aplicaciones en Internet con capacidad de integración entre ellas y que facilita la publicación de contenidos por los usuarios. Pero, al mismo tiempo es la introducción de un nuevo paradigma social y cultural. En este sentido, se podría identificar como un conjunto de tecnologías para la creación social de conocimiento.', 'Monográfico',
15, 1);

INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(18, 'La Web 1.0 ofrecía diferentes servicios a través de Páginas Webs que mostraban información y que brindaban navegadores de estas páginas. Los usuarios única y exclusivamente podían observar lo que el desarrollador de la página solamente subiera. Era información en formatos estáticos, donde las personas no interactuaban con las páginas, es decir, no eran dinámicas, por ejemplo, no podía subir registros de información, actualizarlos o borrarlos. Realmente hoy día este tipo de páginas son obsoletas. Después viene la Web 1,5; en donde las páginas que se ofrecían eran dinámicas desarrolladas en lenguajes como PHP, JSP, ASP, etc. Estas páginas ofrecían a los usuarios la disponibilidad de actualización de datos, eliminación e inserción, modificación y actualización. Estas páginas se encuentran ligadas a bases de datos, en las cuales se permite el alojamiento y manipulación de la información. Hoy en día existe la Web 2.0. En ella se ofrecen páginas desarrolladas en lenguajes de programación como AJAX y XML. Realmente se ofrecen tecnologías que están basadas en Comunidades Colaborativas o Redes Sociales. Pero que realmente su aplicación está encaminada a usuarios finales. Su punto de partida comienza con la publicación de información en conjunto, es decir, millones de usuarios comparten información en diferentes formatos para compartirla como en videos, imágenes, sonido, animaciones, etc.', 'Monográfico',
18, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(19, 'La web 2.0 puede entenderse como un facilitador de un cambio de paradigma en los procesos de aprendizaje; de un sistema jerárquico focalizado en los profesores y en fuentes de conocimiento “oficiales”, a una aproximación en red en que los educadores deben cambiar sus papeles para convertirse en facilitadores del proceso de aprendizaje. Los objetivos del nuevo espacio de educación superior y las propias necesidades de nuestras sociedades colocan como necesidades esenciales el desarrollo por parte de los estudiantes de capacidades de innovación, creatividad y emprendimiento. En este sentido, el “aprender haciendo” (el aprendizaje basado en problemas) y los métodos de aprendizaje activo y colaborativo son esenciales para alcanzar los objetivos citados anteriormente, y la web 2.0 podría convertirse en una herramienta instrumental y estratégica para su desarrollo.', 'Monográfico',
22, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(20, 'Para entender la evolución que ha llegado con la Web 2.0 se puede comparar servicios web que marcan claramente la evolución hacia el Web 2.0 con una nueva forma de hacer las cosas:', 'Monográfico',
19, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(21, 'La adopción de un modelo web 2.0 al aprendizaje en las universidades es un proceso complejo que se enfrenta a importantes barreras tecnológicas, de gestión y humanas. Por estas razones es imprescindible el diseño de una serie de objetivos y de una estrategia aceptada y promocionada por los propios gestores, especialmente aquellos responsables de la gestión de conocimiento y de recursos humanos. Esta primera fase requiere que en muchos casos se produzcan cambios culturales radicales en personas acostumbradas a trabajar y tomar decisiones en un escenario más convencional.', 'Monográfico',
20, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(22, 'Uno de los motores del crecimiento de la web 2.0 es el hecho de que las tecnologías de base utilizadas en aplicaciones posibilitan la integración de contenidos de diferentes orígenes y formatos dentro de nuevos contenedores.', 'Monográfico',
21, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(23, 'Las instituciones universitarias se encuentran en transición. Los cambios en el mundo productivo, la evolución tecnológica, la sociedad de la información, la tendencia a la comercialización del conocimiento, la demanda de sistemas de enseñanza-aprendizaje más flexibles y accesibles a los que pueda incorporarse cualquier ciudadano a lo largo de la vida, están provocando que las instituciones de educación superior compitan decididamente por las tecnologías de la información y las comunicaciones (TIC’s). Pero ¿Cómo están respondiendo las universidades a estos cambios y demandas? Las instituciones de educación superior están, con frecuencia, cambiando al uso de internet para distribuir cursos a estudiantes a distancia, también para mejorar los programas educativos que se distribuyen en el campus. Algunas instituciones han visto esto como una manera de atraer a los estudiantes que no pueden por otra parte asistir a clase; otros lo utilizan como una manera de responder a las necesidades de una nueva población de estudiantes.', 'Monográfico',
22, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(24, 'La necesidad de resolver un problema de integración de diferentes fuentes documentales y diversas técnicas de información utilizadas como recurso didáctico, para la utilización de un texto ambiental, nos ha llevado a presentar los contenidos de enseñanza aprendizaje mediante diferentes códigos de información, desde un tratamiento multimedia que permite resolver de un modo sencillo el uso simultáneo de varias técnicas didácticas (textos, imágenes fijas y móviles, sonidos). Aunque la aplicación informática no ha resuelto los problemas de actitudes y aptitudes de profesores y alumnos, el uso de los TIC’s ha permitido resolver los problemas técnicos planteados. Una concepción de la Didáctica es aquella acción deliberada que organiza, conduce y evalúa el proceso de enseñanza y desde una mirada crítica fundamentada. Aplicando un movimiento dialéctico de teoría-práctica con el objetivo de desarrollar intervenciones pedagógicas eficaces.', 'Monográfico',
23, 1);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(25, 'Los informes evaluativos de los últimos años indican que gran parte de los centros educativos, disponen de suficientes recursos tecnológicos (computadoras, WIFI, conexión a Internet de banda ancha, pizarras digitales, proyectores multimedia, entre otros). Es decir, la tecnología ya no es el problema. Pero en qué medida éstas tecnologías son utilizadas con fines educativos en las escuelas y si se está generando mejoras e innovación en las prácticas de enseñanza y en los métodos desarrollados por el profesorado. Al respecto una de las conclusiones de acuerdo a distintos estudios es que, a pesar del incremento de la disponibilidad de recursos tecnológicos en las escuelas (computadoras, conexión de banda ancha a Internet, pizarras y proyectores digitales) la práctica pedagógica de los docentes en el aula no supone necesariamente una alteración sustantiva del modelo de enseñanza tradicional. Así los profesores usan las TIC’s para apoyar la pedagogía ya existente. Estas son más utilizadas cuando se adecúan a las prácticas tradicionales. Los líderes escolares opinan que el impacto de las TIC’s sobre los métodos de enseñanza en sus escuelas son bajos. Por otra parte se pone de manifiesto que el profesorado, en un porcentaje alto, es usuario de las TIC’s para el desarrollo de tareas vinculadas con la planificación de su enseñanza. Este tipo de tareas en las que son utilizadas las tecnologías digitales consisten preferentemente en:  La programación didáctica de la asignatura, de unidades didácticas o de lecciones mediante la utilización de procesadores de texto.  La preparación de ejercicios o actividades que serán cumplimentadas por su alumnado.  La elaboración de presentaciones multimedia.  La navegación web para buscar información.  La comunicación por email con otros colegas.', 'Monográfico',
24, 1);



-- Investigación #2

INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(26, 'Hechos históricos demuestran que durante la presidencia del General Juan
Vicente Gómez se inician en el país las primeras medidas para modernizar al Ejército
nacional y dentro de esas medidas surge la necesidad de crear la Aviación Militar.', 'Monográfico',
27, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(27, 'En 1972 se reciben los aviones supersónicos CF-5, los helicópteros UH-1H,
mientras que en 1973 se adquieren los aviones: caza bombardero Mirage, de instrucción
T2D y los aviones de reconocimientos Bronco OV-10. La Ley de Orgánica de
Seguridad Social de las Fuerzas Armadas fue promulgada el 04 de julio de 1977 y
publicada en gaceta Oficial N° 2.058 de 6 de julio de 1977, en esta Ley se estipuló todo
lo referente al cuidado integral de la salud, pensiones y otras prestaciones, las cuales ya,
en su mayoría, venían siendo establecidas en la Ley Orgánica de las Fuerzas Armadas,
promulgada según decreto N° 439 de 21 de noviembre de 1958. La mencionada Ley fue
reformada posteriormente en las siguientes fechas: 1 de Julio de 1.977 (Gobierno del
Cddno Carlos Andrés Pérez), 28 de Noviembre de 1.989 (Gobierno del Cddno Carlos
Andrés Pérez), 13 de Agosto de 1.993 (Gobierno del Dr. Ramón J. Velásquez) y 13 de
Julio de 1.995 (Gobierno del Dr. Rafael Caldera). En 1978, ingresan a la Escuela de
Aviación Militar las primeras cadetes femeninas (43) logrando graduarse 7.', 'Monográfico',
27, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(28, 'Monagas (2003) en el trabajo titulado Factores Socio Económicos (Salarios,
Vivienda, Salud, Alimentación) y su Influencia en el Nivel Motivacional del Personal de
Tropa Profesional de la Aviación Militar 1998-2003 (Zona Metropolitana), su objetivo
se orientó al análisis de los mencionados factores a dicha población a fin de precisar su
desempeño dentro de la organización. En tal sentido, su conclusión más relevante es la
problemática de que dicho persona carece de los medios necesarios para lograr la
satisfacción de necesidades familiares y personales, lo cual influyen notoriamente en su
desempeño laboral y entre sus recomendaciones plantea el estudio correspondiente en lo
referente a las mejoras de las condiciones socio-económicas del personal de tropa
profesional de la Aviación Militar.', 'Monográfico',
28, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(29, 'Tereshenko (1998) en el trabajo titulado Las Bajas Extemporáneas del Personal de
Tropa de la Aviación Militar Venezolana por Razones Psicosociales donde se establecen
las posibles causas psicosociales que han generado las bajas extemporáneas de la
organización, teniéndose como baja extemporánea aquellas que se producen antes de
cumplir la carrera en toda su extensión. El documento presenta una serie de problemas
tales como: problemas económicos y familiares, situación de convivencia, trastornos
psicológicos y psiquiátricos, adaptación al medio militar y usos de drogas. Entre las
conclusiones más relevante podemos mencionar que las causas sociales de las bajas
extemporáneas son las siguientes: inadaptación al medio militar, trastornos psicológicos,
conducta antisocial, intentos suicidas, conducta agresiva, conducta homosexual,
limitación intelectual y conducta hipocondríaca ubicando todas dichas bajas en las áreas
de: medidas disciplinaria, razones médicas y problemas psicosociales. Podemos detectar
en el documento que el autor realiza un análisis de carácter netamente desde el punto de
vista psicológico en estrecha concordancia con todas las consideraciones de tipo
psicosocial logrando un trabajo de alta calidad y de numeroso conocimiento.', 'Monográfico',
28, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(30, 'La organización militar también ha influido en el desarrollo de las teorías de la
administración. La organización lineal, por ejemplo, tiene sus orígenes en la
organización militar de los ejércitos de la Antigüedad y de la época medieval. El
principio de unidad de mando, según el cual cada subordinado sólo puede tener un
superior -fundamental para la función de dirección, es el núcleo central de todas las
organizaciones militares de aquellas épocas. La escala jerárquica, es decir, la escala de
niveles de mando de acuerdo con el grado de autoridad y de responsabilidad
correspondiente, es un elemento característico de la organización militar, utilizado en
otras organizaciones.', 'Monográfico',
29, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(31, 'La seguridad de la Nación se encuentra estipulada en la Ley Orgánica de
Seguridad de la Nación donde expresa en su artículo nº 2, lo siguiente: “La Seguridad de
la Nación está fundamentada en el desarrollo integral, y es la condición, estado o
situación que garantiza el goce y ejercicios de los derechos y garantías en los ámbitos
económicos, social, político, cultural, geográfico, ambiental y militar de los principios y
valores constitucionales por la población, las instituciones y cada una de las personas
que conforman el Estado y la sociedad, con proyección generacional, dentro de un
sistema democrático, participativo y protagónico, libre de amenazas a su sobrevivencia,
su soberanía y a la integridad de su territorio y demás espacios geográficos”', 'Monográfico',
29, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(32, 'Dicha Organización, como parte de la administración pública y como sistema de
corte clásico, está conformada por recursos físicos y materiales (máquinas, equipos,
etc.), recursos tecnológicos, (métodos, tecnología y procesos), recursos financieros
(inversiones y financiamiento) y personal (entrenamiento y desarrollo de personal, etc.),
la cual expresa el conjunto de interacciones de sus componentes en función de la
búsqueda del alcance del objetivo de la misma, como lo es la defensa del espacio aéreo
nacional; es decir, está fuertemente relacionada en el uso de una alta tecnología dirigida
a mantener la soberanía aérea nacional. Para lograr este propósito se requiere un
personal altamente calificado y tecnificado.', 'Monográfico',
30, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(33, 'En nuestro país, estos parámetros, que a los ojos de cualquier observador
resultarían absolutamente obvios, no siempre fueron adecuadamente considerados en la
elaboración de una política de defensa nacional. Al contrario, casi siempre, lo que privó
fue un marcado desfasaje y/o desconexión entre las dimensiones señaladas, ya sea como
consecuencia de una inapropiada ponderación de algunas de ellas cuanto por la falta de
lineamientos políticos que le dieran contenido a las mismas', 'Monográfico',
30, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(34, 'Para la primera década del tercer milenio, la Fuerza Armada Nacional será una
organización moderna, altamente disuasiva, integrada por un capital humano profesional
de la más alta calidad. Dotada de una alta capacidad y flexibilidad para garantizar la
seguridad del Estado Venezolano, defender los intereses nacionales y participar
activamente en el desarrollo nacional.', 'Monográfico',
34, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(35, 'Garantizar la independencia y soberanía de la Nación, así como la integridad de
su espacio geográfico mediante la defensa militar, la cooperación en el mantenimiento
del orden interno y la participación activa en el desarrollo nacional.', 'Monográfico',
35, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(36, 'La Aviación Militar Venezolana es un componente de la Fuerza Armada
Nacional dependiente del Ministerio de la Defensa, según lo especificado en la
Constitución de la República Bolivariana de Venezuela (1999) y en la Ley Orgánica de
la Fuerza Armada Nacional (2005).', 'Monográfico',
31, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(37, 'La Aviación Militar Venezolana es una organización jerárquica, que está más
orientada hacia el grupo que hacia el individuo, que tiene especial énfasis en la
disciplina y obediencia, depende de la confianza y lealtad de sus integrantes, tanto del
personal militar como del personal civil. Dicha organización por sus características,
está regida y controlada por un marco legal que le atribuyen condiciones muy
especiales, dando como resultado una serie de limitantes en lo que respecta al espacio de
maniobra conductual del personal de dicha institución.', 'Monográfico',
36, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(38, 'Por lo tanto, la Doctrina Aérea es la declaración autorizada que rige el empleo de
los recursos de la Aviación Militar Venezolana. Se fundamenta en la experiencia militar,
el análisis sistemático de conocimientos obtenidos del estudio de la guerra aérea y de su
adaptabilidad a los probables conflictos en que se vería involucrada la Nación.', 'Monográfico',
NULL,2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(39, 'Asegurar la soberanía del espacio aéreo del territorio nacional, así como de
contribuir con las demás fuerzas orgánicas de la defensa nacional, al desarrollo del país,
a la estabilidad de las instituciones democráticas y asegurar el cumplimiento de la
constitución nacional y demás Leyes de la República.', 'Monográfico',
36, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(40, 'Hacer de la Aviación Militar una organización modelo caracterizada por su
integridad y mística institucional y valorada por la excelencia de su capacidad
operacional administrativa; con alto nivel de calidad en todas sus actuaciones
contribuyendo a la proyección de la Aviación Militar en el ejercicio de su influencia en
las áreas de interés estratégicos para Venezuela y como garante de la seguridad y
defensa de los espacios aéreos del Estado Venezolano.', 'Monográfico',
37, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(41, 'La Aviación Militar Venezolana está conformada de acuerdo a lo estipulado en
la Ley Orgánica de las Fuerzas Armadas Nacionales en su artículo nº 375, de donde
podemos observar que está conformado por 6 comandos y unidades asesoras.', 'Monográfico',
38, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(42, 'La Constitución de la República Bolivariana de Venezuela publicada en Gaceta
Oficial Nº 36860 del 30 de diciembre de 1999, es considerada como la norma suprema
del ordenamiento Jurídico que rige el desarrollo de las Leyes y el funcionamiento de los
poderes públicos; en su Capítulo III, De la Fuerza Armada Nacional:
Artículo nº 7: la Constitución es la norma suprema y el fundamento del
ordenamiento jurídico. Todas las personas y los órganos que ejercen el poder público
están sujetos a esta Constitución.
Artículo nº 322: la seguridad de la Nación es competencia esencial y
responsabilidad del Estado, fundamentada en el desarrollo integral de ésta y su defensa
es responsabilidad de los venezolanos y venezolanas; también de las personas naturales
y jurídicas, tanto de derecho público como de derecho privado, que se encuentren en el
espacio geográfico nacional.', 'Monográfico',
39, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(43, 'En base a lo anterior podemos deducir que Es un término que hoy día
encontramos en multitud de contextos y con el que se busca despertar en quien lo
escucha una sensación positiva, trasmitiendo la idea de que algo es mejor, es decir, la
idea de excelencia. El concepto técnico de calidad representa más bien una forma de
hacer las cosas en las que, fundamentalmente, predominan la preocupación por
satisfacer al cliente y por mejorar, día a día, procesos y resultados. El concepto actual de
Calidad ha evolucionado hasta convertirse en una forma de gestión que introduce el
concepto de mejora continua en cualquier organización y a todos los niveles de la
misma, y que afecta a todas las personas y a todos los procesos.', 'Monográfico',
40, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(44, '“Habermas llama trabajo a la acción dirigida a la consecución de un fin a la
acción instrumental, a la elección racional o a una combinación de ambas”. (Ureñas,
1998:21). Según las formas como el trabajo es observado, podemos deducir que dicho
concepto está referido a una marcada relación entre el reconocimiento del individuo, la
satisfacción laboral del individuo, el carácter social de la producción y la motivación
que permiten lograr la satisfacción de las necesidades. Por lo tanto, es necesario que
estos factores estén en equilibrio para lograr el mejor beneficio y de esta manera una
mayor satisfacción laboral, basado de cómo es dimensionado en la Calidad de Vida en
el Trabajo.', 'Monográfico',
41, 2);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(45, 'La gerencia utiliza una serie de estrategias que permiten detectar mediante el
diagnóstico constante, cuál es la realidad sobre la calidad de vida en el trabajo en los
diversos niveles organizacionales utilizando procesos de acción participativa. La
motivación principal de la calidad de vida en el trabajo, reside en el control de
situaciones de comportamiento proactivo y reactivo que estimulan o limitan la
participación de las personas, que además se relaciona con la coordinación de
actividades organizacionales, la estratificación de la información y la identificación de
los factores que ejercen mayor influencia en el ambiente de trabajo.', 'Monográfico',
42, 2);



-- Investigación #3
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(46, 'La socialización, por una parte aporta las bases para la participación eficiente en la 
sociedad logrando el individuo su adaptación al medio, moldeándolo relativamente, y 
por otra parte posibilita la existencia de la sociedad, dado que sin esta participación 
desaparecería así como la cultura, lo cual indica claramente la existencia de la 
interdependencia entre el individuo y la sociedad. ', 'Monográfico', 52, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(47, 'Durante el proceso de socialización inicial, se incluye preponderantemente la 
interiorización de normas que se encuentran ligados con valores sociales que apuntan a 
lo que es deseable o no deseable desde el punto de vista de otros, entendiéndoseles 
como creaciones artificiales relacionadas con la autoconservación, al sacrificarse parte 
de la libertad para recibir protección de los demás (Garza, 1998), estos valores son 
considerados como una ruptura de la regla natural de la acción que está guiada por los 
fines inmediatos de lo biológico. Los valores no se extinguen dado que representan 
fines ideales que se renuevan en las aspiraciones de los humanos, siendo por tanto 
metatemporales, haciendo posible una historia y una cultura (Ravaglioli, 1984), siendo 
a su vez normas constituyentes del conocimiento y de la conducta social, (Delval, 
2000).', 'Monográfico', 53, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(48, 'Las expectativas forman parte importante de la socialización, puesto que son trasmitidas 
por los agentes socializadores y adoptadas o bien reformuladas por el sujeto socializado, 
constituyendo un motor importante para la actuación del sujeto en su medio social, 
siendo asimismo posible que lo motive o impulse para alcanzar metas, por lo que es 
importante revisar los mecanismos que llevan al individuo a la formación de dichas 
expectativas. 
', 'Monográfico', 54, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(49, 'En el presente capítulo se abordan procesos que guardan una estrecha relación con la 
temática de investigación, dado que precisamente se trata de conocer en ésta si existen 
patrones de socialización de acuerdo a los valores, expectativas, educación, identidad e 
identificación que caractericen a los sujetos en los que se ha observado movilidad 
social. ', 'Monográfico', 51, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(50, 'La socialización ocurre dentro del conglomerado social en el que se encuentra inserto el 
sujeto, siendo específicamente las instituciones, dentro de las cuales resaltan la familia y 
la escuela, quienes se encargan de llevar a los individuos a formar parte de la sociedad. 
Cualquier institución que se desee analizar, evidentemente que responde en sus 
objetivos a intereses dados de los grupos dominantes, en un momento y lugar 
específico. Retomando lo propuesto por Durkheim (1966), “...cada sociedad se forja 
un cierto ideal del hombre y es este ideal lo que constituye el polo de la educación”, por 
lo que cada pueblo tiene la educación que le es propia y que le define al mismo tiempo 
en cuanto a su organización general.
', 'Monográfico', 55, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(51, 'De lo mencionado se comprende que si la atribución causal es un fenómeno que se da 
necesariamente con una connotación social y tiene impacto a su vez sobre los 
integrantes de grupos sociales específicos, influye determinantemente en la 
socialización. ', 'Monográfico', 56, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(52, 'La identidad es otro elemento, que si bien psicológicamente lo podemos ubicar como 
perteneciente a la personalidad del sujeto, se relaciona con la socialización en tanto que 
se adquiere y va tomando características diferenciales a lo largo de la vida, dependiendo 
en gran medida del ambiente, pudiendo entonces hablarse también de identidad grupal y 
comunitaria y/o social. 
', 'Monográfico', 57, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(53, 'La identificación, como proceso de formación de la personalidad, guarda relación con la 
socialización porque el sujeto toma para sí de un otro determinados rasgos de manera 
inconsciente, mismos que le permitirán adaptarse al entorno social, como se destacó en 
el apartado de socialización, al revisar los conceptos relacionados con el mismo. Más 
que indagar cómo se dio el proceso identificatorio, de lo que se trata en este trabajo es 
de detectar si los objetos de identificación de los sujetos presentan características 
distintivas que permitan apoyar a una comprensión y descripción más amplia de 
posibles patrones de socialización. 
', 'Monográfico', 58, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(54, 'La pobreza no puede ser comprendida como un fenómeno individual, puesto que no 
afecta a los seres aislados sino a grupos de éstos (familias, comunidades, países) y aún 
cuando posee una connotación económica por la incapacidad para la obtención de 
satisfactores que implican un gasto, no se trata solo de esto, sino que impacta 
negativamente en todas las áreas de importancia para la vida de los sujetos tales como 
salud, educación así como en el plano laboral, psíquico y social, siendo Leñero y Calva, 
citados por Preciado (1998) quienes hacen resaltar esto último señalando que pobre es 
quien no obtiene la autosatisfacción de sus potencialidades de creación y trascendencia, 
no es reconocido laboralmente en sus aportaciones ni en sus derechos, encontrándose en 
un estado de inmovilidad social y política debido a su condición económica paupérrima 
que lo segrega. ', 'Monográfico', 44, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(55, 'La pobreza es una de las situaciones carenciales que afecta el nivel de vida, 
disminuyéndolo al encontrarse éste debajo de las normas mínimas establecidas, dadas 
las condiciones de desarrollo de un país determinado. (Boltvinik, 1994). En ella, las 
necesidades básicas no son satisfechas, siendo las representativas, las relacionadas con 
lo necesario para sustentar la vida, no lo superfluo ni lo contingente, ni solo lo que 
2 podamos querer o desear (Iriarte, 1991), por lo que también puede definírsele como la 
insatisfacción de necesidades básicas (Vega, 2005). ', 'Monográfico', 45, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(56, 'La pobreza extrema en un sentido absoluto, de acuerdo con el Banco Mundial en 1998, 
consiste en la insatisfacción de necesidades básicas, basada en el bajo nivel de ingreso o 
en cuanto al acceso de servicios básicos, tales como educación, salud, alimentación y 
vivienda (Mejía, 1998); está referida a las familias que no pueden allegarse de los 
suficientes recursos para alimentarse suficientemente y por tanto para desarrollarse 
adecuadamente, viven por lo general en condiciones insalubres que propician la 
aparición de enfermedades (Román y Aguirre, 1998), es asimismo una condición 
absoluta que se refiere a aquellos grupos de personas que requieren de ayuda directa 
para beneficiarse de programas políticos, siendo objeto de programas especiales. El 
nivel y estado de nutrición deficiente de estas personas, tiene relación con los apoyos 
directos que necesitan (Boltvinik, 2003).', 'Monográfico', 46, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(57, 'Para contextualizar el proceso de movilidad social, es necesario referirnos en primera 
instancia al sistema de clases sociales, teniéndose en este sentido que la conducta social 
es diferencial para distintos grupos, también resultan diferentes las asignaciones de roles 
que se realizan en su interior para cumplir con distintas funciones, lo que 
necesariamente nos lleva a conceptuar la estratificación social.', 'Monográfico', 60, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(58, 'Cuando se trata de cuantificar el problema de la pobreza, es necesario considerar los 
indicadores que se evaluarán, habiendo sido lo más común analizarla en cuanto al 
salario mínimo necesario para alcanzar los estándares de consumo de una sociedad 
determinada, lo que reduce el problema a su dimensión económica, por lo cual, para no 
dejar de lado las otras dimensiones involucradas, se tiende a emplear tanto el ingreso y 
el empleo, que revelan lo económico, así como la salud, educación, nutrición y 
vivienda, que se refieren a la dimensión social, considerando asimismo a la exclusión- 
manipulación que revela las dimensiones política y cultural. (Gendreau, 1998; citado 
en Alonso, 1998), lo que amplía grandemente las posibilidades de abordaje, desde la 
perspectiva de diversas disciplinas.', 'Monográfico', 47, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(59, 'La desigualdad económica y por tanto también de calidad de vida invita a pensar en una 
mala repartición de la riqueza en nuestro país, provocado directamente por el modelo 
neoliberal, que ha venido enalteciendo el lucro, la libertad de empresa y la supuesta 
sabiduría del mercado como una salvación a la larga y poco a poco. Para este modelo, 
la pobreza es un costo necesario de la modernización, consecuencia de la 
competitividad y avance de los capaces. ', 'Monográfico', 48, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(60, 'Fernández (2000), menciona que se han podido rescatar dos enfoques tendientes a 
aminorar el problema de la pobreza: 
El estratégico-estructural y global que intenta modificar sistemáticamente con acciones 
multisectoriales la pobreza, en el que cada país ha de planear e implementar cambios 
estructurales profundos, tratando de que por lo menos todos los adultos se encuentren 
incorporados a la vida económicamente activa y que los beneficios del desarrollo 
lleguen a todos los habitantes. ', 'Monográfico', 49, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(61, 'Agregado a lo anterior, se ha visto que los programas y reformas aplicados en nuestro 
país los últimos 14 años, no han representado un factor de crecimiento, sino que más 
bien han profundizado las desigualdades por el deterioro del salario de quienes trabajan 
y de las llamadas clases medias (Vega, 2005), lo que lleva a pensar que se podría 
mejorar sustancialmente la situación de la pobreza solo con cambios estructurales, pues 
solo se ha actuado, como se denota en los párrafos antecedentes, a nivel paliativo. ', 'Monográfico', 50, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(62, 'En términos generales, se refiere al conjunto de cambios económicos y sociales dados 
en la vida de una persona y que inciden de manera sensible en su patrimonio y en su 
prestigio social (Von Mentz, 2003). La movilidad es relativa puesto que en ella 
intervienen factores tales como los sociales, de manera particular las costumbres, leyes 
56 y valores que pueden impulsar o frenar los cambios, intervienen también la pertenencia 
a un estrato socioétnico específico, la ocupación, la formación y la educación adquiridas 
y el modo de vida (Von Mentz, 2003). 
', 'Monográfico', 61, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(63, 'Para la evaluación de la movilidad social, es posible echar mano de los indicadores de 
pobreza o bien del bienestar económico; pueden ser empleados algunos indicadores 
económicos, tales como ingresos, egresos, logros ocupacionales, sean individuales o 
familiares. Cuando se emplean ingresos y egresos, se evalúa per cápita. Cuando son 
empleadas unidades monetarias para su cálculo, se hacen en moneda real, ajustada a la 
inflación. Otros indicadores de tipo social que asimismo pueden emplearse en estudios 
de movilidad, los constituyen los grados académicos alcanzados, los ascensos en el 
trabajo y otros acontecimientos de la vida de los sujetos o de las familias (Coxon y 
Jones, 1984). 
', 'Monográfico', 62, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(64, 'Se ha observado por otra parte, que la motivación hacia la movilidad ascendente, 
aunada a la disponibilidad de medios para lograrla, es uno de los aspectos más 
importantes que apoyan su logro. Se ha hipotetizado en el sentido de que la 
socialización recibida por los sujetos en el hogar juega un papel determinante, pues por 
ejemplo, los hijos de clase media son impulsados para tener altas aspiraciones en 
comparación con los de clase baja en donde se da un menor impulso al desarrollo 
individual, siendo otro factor determinante la ideología predominante en sociedades 
capitalistas, que aprueban y “premian” socialmente a las personas que tienden al éxito 
individualista (Blejer, 1977).
', 'Monográfico', 63, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(65, 'Hablando específicamente de Latinoamérica resulta importante el poder observar 
algunos movimientos relacionados tanto con la estratificación como con la movilidad 
social. 
', 'Monográfico', 64, 3);
INSERT INTO public.unidad_informacion
(id, cita, nivel, fk_categoria, fk_pregunta)
VALUES
(66, 'La socialización, conformada por múltiples factores, entre los cuales se destacan los 
valores aportados por la cultura, la educación formal e informal, las atribuciones 
causales, la identidad y la identificación, posibilitan que el sujeto se adapte a su entorno 
social y al mismo tiempo que posea una cosmovisión compartida con los demás 
integrantes de la sociedad a la cual pertenece. El proceso de socialización, guarda una 
relación importante con la movilidad social, que básicamente puede ser comprendida 
como el movimiento experimentado por los individuos de una posición social a otra. 
', 'Monográfico', 64, 3);


-- Invetigación #4
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(67, 'Al respecto, Pérez, A. (2012); en su Trabajo de Grado, titulado: Modelo Funcional Basado en Estrategias Gerenciales para Mejorar el Desempeño Académico de los Institutos Técnicos Universitarios del Estado Carabobo, presentado ante el área de Postgrado de la Universidad de Carabobo, para optar al título de Magister en Administración de Empresas Mención Gerencia. La presente investigación tuvo como propósito diseñar un modelo funcional basado en Estrategias Gerenciales para el mejoramiento y optimización de los procesos administrativos académicos en los Institutos Técnicos Universitarios del estado Carabobo.', 'Monográfico', 
65, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(68, 'Por otra parte, Boffil, G. (2011), en su Trabajo de Grado, titulado: La Mejora del Talento Humano a través de las nuevas tendencias- competencias y evaluación de desempeño en la Empresa DIRECO C.A, presentado ante el área de estudios de Postgrado de la Universidad de Carabobo, para optar al título de Magister en Administración del Trabajo y Relaciones Laborales. En la actualidad, la gestión del talento humano ocupa un lugar muy importante en las organizaciones, por ser el componente clave y estratégico en ellas.', 'Monográfico', 
67, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(69, 'Las bases teóricas son aquellas que permitieron desarrollar los aspectos conceptuales del tema objeto de estudio, al respecto Palella y Martins. (2012: 62) señalan que, “van a permitir presentar una serie de aspectos que constituyen un cuerpo unitario por medio del cual se sistematizan, clasifican y relacionan entre sí los fenómenos particulares estudiados”. Partiendo de la cita anterior, se hace evidente la necesidad de efectuar la revisión de teorías, paradigmas, estudios, entre otros, vinculados al tema para posteriormente construir una posición frente a la problemática que se pretende abordar.', 'Monográfico', 
67, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(70, 'Según Arriens. (2006:34); la gerencia “es responsable del éxito o fracaso de la gestión de las instituciones, y resulta indispensable para dirigir los asuntos de la misma” de tal forma, que siempre que exista un grupo de individuos que persigan un objetivo, se hace necesario, para el grupo, trabajar unidos a fin de lograr el mismo.', 'Monográfico', 
70, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(71, 'Alvarado. (2007; 39), plantea que cabe definir a la administración estratégica como el arte y la ciencia de formular, implementar y evaluar las decisiones interfuncionales que permiten a la organización alcanzar su objetivo. Esta definición implica que la administración estratégica pretende integrar la administración, la mercadotecnia, las finanzas y la contabilidad, la producción y las operaciones, la investigación y desarrollo y los sistemas computarizados de información para obtener el éxito de la organización.', 'Monográfico', 
71, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(72, 'El talento humano en las organizaciones Para una aproximación apropiada hacia la comprensión de lo que entraña el concepto de talento humano en las organizaciones, se puede partir de la definición simple de talento según Chruden y Sherman, (2002:78), expresan que es la “inteligencia, capacidad intelectual de una persona. Aptitud o capacidad para el ejercicio de una ocupación o dotes intelectuales que dan valor a un individuo”; es decir, es el conjunto de estos valores constituye lo que tradicionalmente se conoce como el capital humano de una organización.', 'Monográfico', 
74, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(73, 'Según López, (2006:45), expresa que el “concepto de talento humano conduce necesariamente al del capital humano, el patrimonio invaluable que una organización puede reunir para alcanzar la competitividad y el éxito”. El capital humano está compuesto por dos aspectos principales:', 'Monográfico', 
75, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(74, 'En la era del conocimiento surgen los equipos de gestión del talento humano, que sustituyen a los departamentos de recursos humanos. Las prácticas de Recursos Humanos se delegan a los gerentes de línea de toda la organización y ellos se convierten en administradores de recursos humanos, mientras que las tareas administrativas y burocráticas no esenciales se transfieren a terceros por medio de subcontratación.', 'Monográfico', 
76, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(75, 'Constituye un proceso cuyo marco está signado por las fases del proceso administrativo, el sentido correcto que se le atribuye según Kloter. (2006:18) “es la acción y efecto de administrar, diligenciar lo conducente para lograr las metas planificadas”, es decir, se define como la acción y efecto de administrar la gerencia. En éstas definiciones se destacan dos grandes elementos como son los medios de producción y los trabajadores, en tal sentido el proceso que se desarrolla para optimizar los medios de producción y fuerza de trabajo es lo que se denomina administración o gestión.', 'Monográfico', 
64, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(76, 'Una gestión eficiente beneficia no sólo a la organización sino que favorece a quien la ejerce así como a los miembros de su equipo. Además, es aplicable a cualquier rama del quehacer humano, especialmente a aquellas que revisten un mayor nivel de complejidad, en particular aquellos procesos en que el factor humano es solamente quien ejecuta las acciones gerenciales sino que representa el problema en sí. Tal es el caso de las instituciones que realizan la gestión pública, donde la participación popular requiere de un proceso gerencial realmente efectivo, y que trascienda de su particularidad.', 'Monográfico', 
72, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(77, 'En su artículo 89. El trabajo es un hecho social y gozará de la protección del Estado. La ley dispondrá lo necesario para mejorar las condiciones materiales, morales e intelectuales de los trabajadores y trabajadoras.', 'Monográfico', 
68, 4);
INSERT INTO public.unidad_informacion
(id, cita, nivel, 
fk_categoria, fk_pregunta)
VALUES
(78, 'Actitudes: Creatividad actitudes son un tipo de diferencias individuales que afectan el comportamiento de los individuos.
Administración de personal: es una responsabilidad de línea, pero también es una función de staff privadas.', 'Monográfico', 
69, 4);


/* END unidad_informacion */

/* START bibliografia_usada */
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(1, 1, 1);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(2, 2, 2);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(3, 3, 3);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(4, 4, 4);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(5, 5, 5);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(6, 6, 6);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(7, 7, 7);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(8, 8, 8);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(9, 9, 9);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(10, 10, 1);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(11, 11, 2);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(12, 12, 3);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(13, 13, 4);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(14, 14, 5);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(15, 15, 6);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(16, 16, 7);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(17, 17, 8);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(18, 18, 9);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(19, 19, 1);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(20, 20, 2);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(21, 21, 3);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(22, 22, 4);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(23, 23, 5);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(24, 24, 6);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(25, 25, 7);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(26, 26, 10);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(27, 27, 11);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(28, 28, 12);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(29, 29, 13);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(30, 30, 14);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(31, 31, 10);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(32, 32, 11);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(33, 33, 12);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(34, 34, 13);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(35, 35, 14);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(36, 36, 10);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(37, 37, 11);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(38, 38, 12);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(39, 39, 13);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(40, 40, 14);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(41, 41, 10);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(42, 42, 11);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(43, 43, 12);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(44, 44, 13);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(45, 45, 14);



-- Investigacion #3
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(46, 46, 15);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(47, 47, 16);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(48, 48, 17);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(49, 49, 18);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(50, 50, 19);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(51, 51, 20);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(52, 52, 21);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(53, 53, 22);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(54, 54, 23);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(55, 55, 24);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(56, 56, 25);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(57, 57, 26);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(58, 58, 27);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(59, 59, 28);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(60, 60, 29);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(61, 61, 30);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(62, 62, 15);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(63, 63, 16);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(64, 64, 17);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(65, 65, 18);
INSERT INTO public.bibliografia_usada
(id, fk_unidad_informacion, fk_bibliografia)
VALUES
(66, 66, 19);

/* END bibliografia_usada */

/* START evento_ui */
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(1, 'Evento Causal', 1, 1);
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(2, 'Evento a Modificar', 1, 2);
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(3, 'Evento a Modificar', 2, 3);
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(4, 'Evento a Modificar', 3, 4);
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(5, 'Evento Causal', 3, 5);
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(6, 'Evento Causal', 3, 6);
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(7, 'Evento Causal', 4, 7);
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(8, 'Evento Causal', 4, 8);
INSERT INTO public.evento_ui
(id, clase, fk_unidad_informacion, fk_evento)
VALUES
(9, 'Evento a Modificar', 4, 9);

/* END evento_ui */

/* START categoria_calidad */
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(1, 'Definición de los Eventos');
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(2, 'Tipo de Investigación');
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(3, 'Fundamentación Noológica');
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(4, 'Objetivos Específicos');
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(5, 'Objetivo General');
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(6, 'Enunciado Holopráxico');
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(7, 'Justificación');
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(8, 'Descripción de los Instrumentos');
INSERT INTO public.categoria_calidad
(id, nombre)
VALUES
(9, 'Descripción de las Unidades de Estudio');
/* END categoria_calidad */

/* START categoria_pregunta */
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(1, 'Justifica el Contexto', 7);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(2, 'Justifica la Unidad de Estudio', 7);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(3, 'Justifica los Eventos', 7);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(4, 'Concuerda con el Holotipo de la Investigación', 5);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(5, 'Involucran los Estadios previos', 4);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(6, 'Las fuentes son variadas', 3);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(7, 'Conceptualiza los eventos de estudio', 3);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(8, 'Contiene la Fundamentación Legal del tema', 3);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(9, 'Las fuentes son vigentes', 3);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(10, 'Están definidas las sinergias o dimensiones', 1);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(11, 'Está el cuadro de operacionalización', 1);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(12, 'Está el cuadro de operacionalización completo', 1);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(13, 'Define y describe la población', 9);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(14, 'Define y describe la muestra', 9);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(15, 'Describe el tipo de muestreo', 9);
INSERT INTO public.calidad_pregunta
(id, pregunta, fk_categoria_calidad)
VALUES
(16, 'Los ítemes corresponden a los indicios', 8);
/* END categoria_pregunta */

/* START calidad_item */

/* Investigación #1 */
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(1, TRUE, 1, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(2, TRUE, 2, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(3, TRUE, 3, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(4, TRUE, 4, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(5, FALSE, 5, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(6, TRUE, 6, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(7, TRUE, 7, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(8, TRUE, 8, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(9, FALSE, 9, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(10, TRUE, 10, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(11, TRUE, 11, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(12, FALSE, 12, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(13, TRUE, 13, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(14, TRUE, 14, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(15, TRUE, 15, 1);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(16, TRUE, 16, 1);


/* Investigación #2 */
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(17, TRUE, 1, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(18, FALSE, 2, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(19, TRUE, 3, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(20, TRUE, 4, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(21, FALSE, 5, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(22, TRUE, 6, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(23, TRUE, 7, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(24, TRUE, 8, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(25, FALSE, 9, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(26, TRUE, 10, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(27, TRUE, 11, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(28, FALSE, 12, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(29, TRUE, 13, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(30, TRUE, 14, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(31, FALSE, 15, 2);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(32, TRUE, 16, 2);


/* Investigación #3 */
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(33, FALSE, 1, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(34, FALSE, 2, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(35, FALSE, 3, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(36, TRUE, 4, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(37, FALSE, 5, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(38, TRUE, 6, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(39, TRUE, 7, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(40, TRUE, 8, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(41, FALSE, 9, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(42, TRUE, 10, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(43, TRUE, 11, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(44, FALSE, 12, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(45, TRUE, 13, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(46, TRUE, 14, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(47, FALSE, 15, 3);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(48, TRUE, 16, 3);


/* Investigación #4 */
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(49, TRUE, 1, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(50, TRUE, 2, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(51, TRUE, 3, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(52, TRUE, 4, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(53, FALSE, 5, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(54, FALSE, 6, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(55, TRUE, 7, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(56, TRUE, 8, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(57, FALSE, 9, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(58, TRUE, 10, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(59, FALSE, 11, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(60, FALSE, 12, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(61, TRUE, 13, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(62, TRUE, 14, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(63, TRUE, 15, 4);
INSERT INTO public.calidad_item
(id, respuesta, fk_calidad_pregunta, fk_investigacion)
VALUES
(64, FALSE, 16, 4);

/* END calidad_item */

/* START justificacion_ui */
INSERT INTO public.justificacion_ui
(id, fk_justificacion, fk_unidad_informacion)
VALUES
(1, 1, 1);
INSERT INTO public.justificacion_ui
(id, fk_justificacion, fk_unidad_informacion)
VALUES
(2, 2, 2);
INSERT INTO public.justificacion_ui
(id, fk_justificacion, fk_unidad_informacion)
VALUES
(3, 3, 3);
INSERT INTO public.justificacion_ui
(id, fk_justificacion, fk_unidad_informacion)
VALUES
(4, 4, 4);
/* END justificacion_ui */

/* START unidad_estudio_ui */
INSERT INTO public.unidad_estudio_ui
(id, fk_unidad_estudio, fk_unidad_informacion)
VALUES
(1, 1, 1);
INSERT INTO public.unidad_estudio_ui
(id, fk_unidad_estudio, fk_unidad_informacion)
VALUES
(2, 2, 2);
INSERT INTO public.unidad_estudio_ui
(id, fk_unidad_estudio, fk_unidad_informacion)
VALUES
(3, 3, 3);
INSERT INTO public.unidad_estudio_ui
(id, fk_unidad_estudio, fk_unidad_informacion)
VALUES
(4, 4, 4);
/* END unidad_estudio_ui */

/* START contexto_ui */
INSERT INTO public.contexto_ui
(id, fk_contexto, fk_unidad_informacion)
VALUES
(1, 1, 1);
INSERT INTO public.contexto_ui
(id, fk_contexto, fk_unidad_informacion)
VALUES
(2, 2, 2);
INSERT INTO public.contexto_ui
(id, fk_contexto, fk_unidad_informacion)
VALUES
(3, 3, 3);
INSERT INTO public.contexto_ui
(id, fk_contexto, fk_unidad_informacion)
VALUES
(4, 4, 4);
/* END contexto_ui */

/* START sinergia */

-- Investigación #1
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(1, 'Aplicaciones', 1);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(2, 'Comunicación participativa', 1);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(3, 'Integración de contenidos', 1);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(4, 'Producción de contenidos', 1);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(5, 'Impartir conocimientos de Hardware', 2);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(6, 'Impartir conocimientos de Software de Ofimática', 2);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(7, 'Impartir conocimientos de utilización de Internet', 2);


-- Investigación #2
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(8, 'Institucional', 3);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(9, 'Económica', 3);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(10, 'Social', 3);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(11, 'Psicológica', 3);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(12, 'Política', 3);


-- Investigación #3
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(13, 'Desempeño social', 4);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(14, 'Desempeño económico', 4);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(15, 'Influencia económica en otros', 5);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(16, 'Progreso social y económico', 5);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(17, 'Atribución de logros', 6);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(18, 'Motivación mutua', 6);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(19, 'Ayuda progresiva', 6);


-- Investigacion #4
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(20, 'Desempeño gerencial', 7);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(21, 'Desempeño profesional', 7);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(22, 'Capital Humano', 7);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(23, 'Capital Intelectual', 7);

INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(24, 'Comportamiento ambiental dentro de la organización', 8);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(25, 'Comportamiento social dentro de la organización', 8);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(26, 'Comportamiento estructural dentro de la organización', 8);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(27, 'Comportamiento personal dentro de la organización', 8);

INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(28, 'Factores que evaluan el desempeño', 9);
INSERT INTO public.sinergia
(id, nombre, fk_evento_ui)
VALUES
(29, 'Tipos de métodos', 9);

/* END sinergia */

/* START poblacion*/
INSERT INTO public.poblacion
(id, descripcion, cantidad, fk_unidad_estudio_ui)
VALUES
(1, 'Estudiantes del 1er Semestre de la Facultad de Ingeniería en Sistemas, Electrónica e Industrial de la UTA', 94, 1);
INSERT INTO public.poblacion
(id, descripcion, cantidad, fk_unidad_estudio_ui)
VALUES
(2, 'Personal de Oficiales de la Aviación Militar Venezolana', 1384, 2);
INSERT INTO public.poblacion
(id, descripcion, cantidad, fk_unidad_estudio_ui)
VALUES
(3, '3 grupos de distinta condición social en Palomar', 918, 3);
INSERT INTO public.poblacion
(id, descripcion, cantidad, fk_unidad_estudio_ui)
VALUES
(4, 'Directores y empleados de las áreas de Dirección de Escuela, Dirección de Recursos Humanos, Dirección de Asuntos Profesorales, Dirección de Gestión y Servicios y Dirección de Extensión', 30, 4);

/* END poblacion*/

/* START indicio */

-- Investigación #1
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(1, 'Blogs', 1);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(2, 'Wikis', 1);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(3, 'Foros', 2);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(4, 'Chats', 2);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(5, 'Páginas Web personalizadas', 3);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(6, 'Aportes de información investigada', 3);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(7, 'Aportes de información de conocimientos personales', 4);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(8, 'Identificación de partes del computador', 5);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(9, 'Desarmar el computador', 5);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(10, 'Mantenimiento del computador', 5);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(11, 'Armar el computador', 5);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(12, 'Instalar Sistema Operativo de WIN XP', 6);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(13, 'Utilización de Microsoft Office', 6);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(14, 'Utilización de Internet', 7);


-- Investigación #2
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(15, 'Identidad organizacional', 8);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(16, 'Valores y creencias', 8);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(17, 'Misión institucional', 8);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(18, 'Participación de niveles', 8);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(19, 'Gerencia', 8);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(20, 'Tecnología de la información', 8);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(21, 'Liderazgo', 8);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(22, 'Autonomía funcional', 8);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(23, 'Remuneración', 9);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(24, 'Comparación publica/privada', 9);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(25, 'Comparación interna', 9);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(26, 'Control económico', 9);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(27, 'Mantenimiento', 9);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(28, 'Presupuesto', 9);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(29, 'Estabilidad laboral', 10);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(30, 'Posibilidad de ascenso', 10);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(31, 'Capacitación', 10);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(32, 'Entrenamiento', 10);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(33, 'Trabajo en equipo', 10);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(34, 'Bienestar Social', 10);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(35, 'Higiene y Seguridad Industrial', 11);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(36, 'Asistencia de salud', 11);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(37, 'Apoyo al medio de trabajo', 11);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(38, 'Ascenso', 11);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(39, 'Reconocimiento', 11);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(40, 'Motivación', 11);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(41, 'Satisfacción en el trabajo', 11);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(42, 'Ocio y tiempo libre', 11);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(43, 'Toma de decisiones', 12);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(44, 'Comunicación', 12);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(45, 'Tramites administrativos', 12);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(46, 'Dirección estratégica', 12);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(47, 'Aplicación de los principios castrenses', 12);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(48, 'Seguridad social', 12);


-- Investigación #3
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(49, 'Ingresos del sujeto', 13);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(50, 'Liderazgo social', 18);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(51, 'Compartir de experiencias', 19);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(52, 'Charla económica', 17);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(53, 'Incremento de moral y ética', 14);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(54, 'Avance socioeconómico', 15);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(55, 'Muestra de humildad y ayuda', 16);



-- Investigación #4
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(56, 'Planificación', 20);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(57, 'Liderzago', 20);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(58, 'Motivación', 20);

INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(59, 'Comunicación', 21);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(60, 'Evaluación', 21);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(61, 'Toma de decisiones', 21);

INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(62, 'Capital social', 22);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(63, 'Capital personal', 22);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(64, 'Valores', 23);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(65, 'Autoestima', 23);


INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(66, 'Espacio fisico', 24);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(67, 'Condiciones de calor y ruido', 24);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(68, 'Pertenencia', 25);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(69, 'Conflicto', 25);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(70, 'Estilo de direción', 26);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(71, 'Trabajo en equipo', 26);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(72, 'Actitud', 27);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(73, 'Reconocimiento', 27);


INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(74, 'Conocimiento', 28);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(75, 'Calidad en el trabajo', 28);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(76, 'Relación interpersonal', 28);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(77, 'Estabilidad creativa', 28);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(78, 'Escala gráfica', 29);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(79, 'Elección forzada', 29);
INSERT INTO public.indicio
(id, nombre, fk_sinergia)
VALUES
(80, '360 feedback', 29);

/* END indicio */

/* START item */

-- Investigación #1
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(1, 1, '¿Identifica usted el Mainboard de un computador?', 8, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(2, 2, '¿Usted identifica las unidades de disco?', 9, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(3, 3, '¿Reconoce usted las unidades de memoria RAM?', 9, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(4, 4, '¿La observación de medios audiovisuales en un blog facilitaría la comprensión y el aprehensión del conocimiento en lo referente a la identificación de las partes del PC?', 1, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(5, 5, '¿Sabe dar mantenimiento técnico a los buses de la memoria RAM?', 10, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(6, 6, '¿Sabe qué significa cuando emite un pitido el computador al encender?', 10, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(7, 7, '¿Conoce usted con exactitud las precauciones para dar mantenimiento a un computador?', 10, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(8, 8, '¿Sabe usted conectar correctamente los buses de datos en las unidades de disco?', 11, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(9, 9, '¿Diferencia los puertos internos que corresponden al Disco Duro y CD-Room?', 8, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(10, 10, '¿En el puerto IDE 1 se conecta el Disco Duro?', 11, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(11, 11, '¿Sabe instalar correctamente el sistema operativo Win XP?', 12, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(12, 12, '¿Utiliza usted adecuadamente la combinación de correspondencia?', 13, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(13, 13, '¿Sabe cómo utilizar apropiadamente las fórmulas para realizar cálculos en Excel?', 13, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(14, 14, '¿Sabe usted insertar hipervínculos en Power Point?', 13, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(15, 15, '¿Sabe usted descargar software libre de Internet?', 14, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(16, 16, '¿Sabe como asignar una dirección IP al computador?', 14, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(17, 17, '¿De los siguientes cual cree usted que es el medio de almacenamiento más adecuado para su uso?', 13, 2, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(18, 18, 'Cuál sería el medio que permite mayor velocidad de navegación en internet?', 13, 2, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(19, 19, '¿Cuál cree usted que es el beneficio más alto en el uso de una portátil?', 10, 2, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(20, 20, '¿Dentro de un PC cuál será la parte más importante dentro del funcionamiento del mismo?', 8, 2, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(21, 21, '¿Sabe cómo diseñar un Blog?', 1, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(22, 22, '¿Sabe diseñar un Wiki?', 2, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(23, 23, '¿Sabe cómo convertirse en miembro de un foro virtual?', 3, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(24, 24, '¿Sabe diseñar una página web personalizada?', 5, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(25, 25, '¿Está en condiciones de hacer aportes científicos personales?', 7, 1, 1);

-- Investigación #2
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(26, 1, 'Las políticas y procedimientos de Personal son conocidos por todos', 41, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(27, 2, 'El personal está objetivamente evaluado y recompensado por su desempeño', 34, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(28, 3, 'Las políticas de promoción y ascensos se hacen con estricto apego al mérito', 42, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(29, 4, 'El personal se encuentra identificado con los planes y objetivos asignados a la institución', 15, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(30, 5, 'Los planes de adiestramiento y desarrollo de personal se formulan para satisfacer necesidades de la organización', 28, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(31, 6, 'Se solicita opinión al personal subalterno sobre asuntos importantes', 43, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(32, 7, 'Las remuneraciones percibidas por el personal son justas y apegadas a la responsabilidad del cargo', 22, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(33, 8, 'Las condiciones de trabajo cumplen con las normas mínimas de comodidad, higiene y seguridad industrial', 35, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(34, 9, 'La organización aporta los recursos suficientes para ejecutar los trabajos con eficacia', 23, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(35, 10, 'Se fomenta el trabajo en equipos y las personas se integran en forma voluntaria y coordinada', 29, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(36, 11, 'La comunicación entre los diversos niveles es oportuna y efectiva', 44, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(37, 12, 'La designación de cargos se hace con apego a los requisitos vs perfil del candidato', 45, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(38, 13, 'Se capacita al personal para que desempeñe roles y tareas más importantes', 30, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(39, 14, 'El personal percibe la existencia de un liderazgo efectivo y se identifica conel', 16, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(40, 15, 'El personal está motivado, apoyado y recompensado para el desempeño de su trabajo', 36, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(41, 16, 'El personal entiende los procesos de cambio y la gerencia los ha manejado en forma efectiva', 17, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(42, 17, 'El sistema de comunicación interno fomenta el flujo de información y el intercambio abierto de ideas', 46, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(43, 18, 'Las políticas de bienestar social cumplen con las demandas de los usuarios', 37, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(44, 19, 'Los servicios médicos quirúrgicos son de calidad y se cuenta con suficiente dotación de insumos', 38, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(45, 20, 'Frecuentemente se desarrollan actividades culturales, sociales y deportivas para unir a la familia', 39, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(46, 21, 'El recurso humano y su entorno están unidos y comprometidos con la misión institucional', 18, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(47, 22, 'El personal tiene un alto grado de creatividad, ingenio, mística y sentido de ética para el trabajo', 31, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(48, 23, 'Las personas sienten orgullo por trabajar en la institución y ser miembros valiosos de la misma', 19, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(49, 24, 'La institución tiene un sistema de valores y creencias entendidos y compartidos por todos', 20, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(50, 25, 'La dirección superior percibe los cambios en el entorno de la institución', 21, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(51, 26, 'El presupuesto asignado a la institución es suficiente para cumplir sus objetivos', 24, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(52, 27, 'Existe una política de planificación y desarrollo del personal a todo nivel', 32, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(53, 28, 'Las acciones planificadas para dar respuesta a los cambios en el ambiente externo son informadas por el escalón superior', 47, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(54, 29, 'Existen cursos de actualización tecnológica y gerencial para el personal profesional', 33, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(55, 30, 'El personal es recompensado de acuerdo de su desempeño', 40, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(56, 31, 'Los incrementos de salarios percibidos satisfacen las necesidades depersonal', 25, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(57, 32, 'El sueldo que percibe, en las mismas condiciones de trabajo, en comparación con los percibidos por sus compañeros de trabajo es equitativo', 26, 3, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(58, 33, 'El sueldo que percibe en la AMV, produce mayor satisfacción con respecto a otros similares en la actividad privada', 27, 3, 1);



-- Investigación #3
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(59, 1, 'Drenaje', 54, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(60, 2, 'Agua entubada', 54, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(61, 3, 'Luz', 54, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(62, 4, 'Techo', 54, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(63, 5, 'Paredes', 54, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(64, 6, 'Piso', 54, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(65, 7, 'Fecha de ingreso en el trabajo', 51, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(66, 8, 'Fecha de culminación en el trabajo', 51, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(67, 9, 'Sueldo', 49, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(68, 10, 'Puesto al empezar cada trabajo', 50, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(69, 11, 'Puesto al finalizar cada trabajo', 50, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(70, 12, 'Tamaño de la empresa', 55, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(71, 13, 'Escolaridad del sujeto', 55, 4, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(72, 14, 'Escolaridad del padre', 55, 4, 1);


-- Investigación #4
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(73, 1, 'Planifica y establece los objetivos, y permite que sean los subordinados los que se repartan los trabajos y determinen la forma de llevarlos a cabo', 56, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(74, 2, 'Mantiene a su personal informado sobre cualquier decisión que le afecte, ejerciendo su papel de líder en el ejercicio de sus funciones', 57, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(97, 3, 'Estimula al personal administrativo para que se capaciten a través de cursos y talleres', 58, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(75, 4, 'Se canaliza a través de rumores o canales informales de comunicación', 59, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(76, 5, 'Selecciona los criterios adecuados para la evaluación del rendimiento del empleado', 60, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(77, 6, 'Busca alternativas en las toma de decisión para la solución de un problema', 61, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(78, 7, 'Considera que la remuneración que le otorga la institución está por encime de la media de su entorno social', 62, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(79, 8, 'Le ofrece a los empleados actividades (capacitación, reconocimiento e integración) para elevar la gestión del talento humano', 63, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(80, 9, 'Reconoce el nivel de compromiso para apoyar el trabajo que realiza en su ambiente laboral', 64, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(81, 10, 'Incentiva a sus empleados con ascensos profesionales para su autorrealización', 65, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(82, 11, 'Le preocupa el mantenimiento de su área de trabajo o de su espacio físico', 66, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(83, 12, 'Se toma el tiempo para detectar los factores ambientales (ruido, calor, iluminación) que inciden en su área de trabajo', 67, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(84, 13, 'Promueve actividades que lo integran e incluyen en su equipo de trabajo', 68, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(85, 14, 'Deja que los otros asuman la responsabilidad de resolver el conflicto', 69, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(86, 15, 'Está alineado con la misión visión y objetivos del área en donde trabaja', 70, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(87, 16, 'Tiene una comunicación efectiva con el grupo de trabajo', 71, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(88, 17, 'Tiene una actitud abierta respecto a su punto de vista y escucha las opiniones de sus subordinados en cuanto a cómo llevar a cabo sus funciones', 72, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(89, 18, 'Recibe por parte de la institución una justa remuneración económica por las labores desempeñadas en su área', 73, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(90, 19, 'Tiene oportunidades para dar a conocer sus ideas y compartir las mejores prácticas de conocimientos dentro del área de trabajo', 74, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(91, 20, 'Posee los conocimientos necesarios para medir la calidad de su trabajo.', 75, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(92, 21, 'Apoya la seguridad y la confianza en los miembros del grupo', 76, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(93, 22, 'Considera los prejuicios personales los cuales se manifiestan, evitando un mejor desarrollo en las áreas de trabajo', 77, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(94, 23, 'Evalúa el desempeño de sus empleados otorgando una justa apreciación en su puesto de trabajo', 78, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(95, 24, 'Aplica los métodos tradicionales de evaluación (escala grafica,, elección forzada, Investigación de campo, Comparación de pares y 360 feeck back)', 79, 1, 1);
INSERT INTO public.item
(id, numero, descripcion, fk_indicio, fk_parametro, fk_instrumento)
VALUES
(96, 25, 'Considera que el método feeck back le da una mejor apreciación al empleado en su desempeño laboral', 80, 1, 1);



/* END item */

/* START muestra */
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(1, 'Primero Paralelo A', 21, 1);
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(2, 'Primero Paralelo B', 31, 1);
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(3, 'Primero Paralelo D', 28, 1);
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(4, 'Primero Paralelo G', 14, 1);

INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(5, 'Base Aérea Mariscal Sucre', 390, 2);
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(6, 'Base Aérea El Libertador', 679, 2);
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(7, 'Comandancia General de la Aviación', 120, 2);
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(8, 'Base Aérea Francisco de Miranda', 105, 2);
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(9, 'Escuela Superior de Guerra Aérea', 90, 2);

INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(10, 'Directores', 5, 4);
INSERT INTO public.muestra
(id, descripcion, cantidad, fk_poblacion)
VALUES
(11, 'Empleados', 25, 4);

/* END muestra */

/* START tecnica_muestreo_aplicada */
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(1, 1, 1);
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(2, 2, 1);
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(3, 3, 1);
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(4, 4, 1);

INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(5, 5, 1);
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(6, 6, 1);
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(7, 7, 1);
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(8, 8, 1);
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(9, 9, 1);

INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(10, 10, 1);
INSERT INTO public.tecnica_muestreo_aplicada
(id, fk_muestra, fk_tecnica_muestreo)
VALUES
(11, 11, 1);

/* END tecnica_muestreo_aplicada */

/* START criterio_metodologico */
INSERT INTO public.criterio_metodologico
(id, tipo_abordaje, fk_diseno)
VALUES
(1, 'Cosmológico', 42);
INSERT INTO public.criterio_metodologico
(id, tipo_abordaje, fk_diseno)
VALUES
(2, 'Cosmológico', 43);
/* END criterio_metodologico */

/* START tecnica_analisis_aplicada */
INSERT INTO public.tecnica_analisis_aplicada
(id, fk_criterio_metodologico, fk_tecnica_analisis)
VALUES
(1, 1, 1);
INSERT INTO public.tecnica_analisis_aplicada
(id, fk_criterio_metodologico, fk_tecnica_analisis)
VALUES
(2, 1, 1);
INSERT INTO public.tecnica_analisis_aplicada
(id, fk_criterio_metodologico, fk_tecnica_analisis)
VALUES
(3, 2, 1);
INSERT INTO public.tecnica_analisis_aplicada
(id, fk_criterio_metodologico, fk_tecnica_analisis)
VALUES
(4, 1, 1);
/* END tecnica_analisis_aplicada */

/* START criterio_metodologico_ui */
INSERT INTO public.criterio_metodologico_ui
(id, fk_criterio_metodologico, fk_unidad_informacion)
VALUES
(1, 1, 1);
INSERT INTO public.criterio_metodologico_ui
(id, fk_criterio_metodologico, fk_unidad_informacion)
VALUES
(2, 1, 2);
INSERT INTO public.criterio_metodologico_ui
(id, fk_criterio_metodologico, fk_unidad_informacion)
VALUES
(3, 2, 3);
INSERT INTO public.criterio_metodologico_ui
(id, fk_criterio_metodologico, fk_unidad_informacion)
VALUES
(4, 1, 4);
/* END criterio_metodologico_ui */