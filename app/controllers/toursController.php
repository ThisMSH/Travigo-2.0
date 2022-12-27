<?php

class toursController extends toursModel {

    public function getTours() {
        $tours = $this->getAllTours();
        return $tours;
    }

    public function insertData($data) {
        $this->insertTour($data);
    }

    public function update($id) {
        $data = $this->getData($id);

        view::load("updateDestination", $data);
    }

    public function updateTour($id) {
        $data = array("ID" => $id); 
        view::load("includes/update", $data);
    }

    public function updateSendData($data) {
        $this->updateData($data);
    }

    public function delete($id) {
        $this->deleteTour($id);
    }
}