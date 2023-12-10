--
-- PostgreSQL database dump
--

-- Dumped from database version 16.1
-- Dumped by pg_dump version 16.1

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

SET default_table_access_method = heap;

--
-- Name: admins; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.admins (
    id integer NOT NULL,
    handle character varying(250),
    level character varying(250)
);


ALTER TABLE public.admins OWNER TO postgres;

--
-- Name: admins_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.admins_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.admins_id_seq OWNER TO postgres;

--
-- Name: admins_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.admins_id_seq OWNED BY public.admins.id;


--
-- Name: admins id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.admins ALTER COLUMN id SET DEFAULT nextval('public.admins_id_seq'::regclass);


--
-- Data for Name: admins; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.admins (id, handle, level) FROM stdin;
1	Code Br3aker ICA	1
2	r0ot_d3vil	1
\.


--
-- Name: admins_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.admins_id_seq', 1, false);


--
-- Name: admins admins_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.admins
    ADD CONSTRAINT admins_pkey PRIMARY KEY (id);


--
-- Name: TABLE admins; Type: ACL; Schema: public; Owner: postgres
--

GRANT ALL ON TABLE public.admins TO ica_lab;


--
-- PostgreSQL database dump complete
--

