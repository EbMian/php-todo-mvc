<?php
class TaskEntity {
  // Attributes
  private ? int $id;
  private ? string $title;
  private ? string $description;
  private ? bool $completed;
  private ? string $createdAt;
  private ? string $updatedAt;
  private ? string $completedAt;

  // Methods
  public function getId() : ? int {
    return $this->id;
  }
  public function setId(?int $id) : TaskEntity {
    $this->id = $id;
    return $this;
  }
  public function getTitle() : ? string {
    return $this->title;
  }
  public function setTitle($title) : TaskEntity {
    $this->title = $title;
    return $this;
  }
  public function getDescription() : ? string {
    return $this->description;
  }
  public function setDescription(? string $description) : TaskEntity  {
    $this->description = $description;
    return $this; 
  }
  public function getCompleted() : ? bool {
    return $this->completed;
  }
  public function setCompleted(? bool $completed) : TaskEntity  {
    $this->completed = $completed;
    return $this;
  }
  public function getCreatedAt() : ? string {
    return $this->createdAt;
  }
  public function setCreatedAt(? string $createdAt) : TaskEntity  {
    $this->createdAt = $createdAt;
    return $this;
  }
  public function getUpdatedAt() : ? string {
    return $this->updatedAt;
  }
  public function setUpdatedAt(? string $updatedAt) : TaskEntity  {
    $this->updatedAt = $updatedAt;
    return $this;
  }
  public function getCompletedAt() : ? string {
    return $this->completedAt;
  }
  public function setCompletedAt(? string $completedAt) : TaskEntity  {
    $this->completedAt = $completedAt;
    return $this;
  }

}
?>