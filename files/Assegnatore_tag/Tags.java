package enzo;

import java.util.ArrayList;

public class Tags {
    private ArrayList<String> tag = new ArrayList<>();




    public ArrayList<String> getTag() {
        return tag;
    }


    public void setTag(String tag) {
        System.out.println("Il tag che ho ricevuto e': " + tag);
            this.tag.add(tag);
        }

        public int esiste(String parola ){
            for (String tag: getTag()) {
                if (parola.equals(tag)){
                    return 1;
                }
            }
            return 0;
        }

    }


