# Solicitation Module
### Simple solicitation management
```mermaid
graph TD;
    Solicitation-->Tasks;
    Solicitation-->Modules;
    Solicitation-->Groups;
    Solicitation-->Files;
    Solicitation-->Comments;
    Solicitation-->Brainstorms;
```

### Actions
```mermaid
graph TD;
    Workspace-->Create;
    Workspace-->Update;
    Workspace-->Delete;
    Workspace-->Tags;
    Tags-->TagsAdd[add];
    Tags-->TagsDel[del];
    Workspace-->Participants;
    Participants-->ParticipantAdd[add];
    Participants-->ParticipantDel[del];    
```
