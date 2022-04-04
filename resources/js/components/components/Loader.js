import React from "react";
import { Container, Row, Spinner } from "reactstrap";

const Loader = () => (
  <Container fluid className="d-flex loader">
    <Row className="justify-content-center align-self-center w-100 text-center">
      <Spinner color="primary" />
    </Row>
  </Container>
);

export default Loader;
